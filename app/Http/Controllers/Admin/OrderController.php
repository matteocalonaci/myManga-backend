<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Manga;
use Faker\Factory as Faker;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Order::with('mangas'); // Carica i manga associati

        if ($request->has('search') && $request->search != '') {
            $query->where('client_name', 'like', '%' . $request->search . '%')
                  ->orWhere('client_email', 'like', '%' . $request->search . '%');
        }

        $orders = $query->paginate(5);

        return view('admin.orders.index', ['orders' => $orders]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mangas = Manga::all(); // Recupera tutti i manga per il selettore
        return view('admin.orders.create', compact('mangas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $faker = Faker::create();

        // Crea un nuovo ordine
        $order = Order::create([
            'client_name' => $request->input('client_name'),
            'client_address' => $request->input('client_address'),
            'total_price' => $request->input('total_price'),
            'status' => $request->input('status'),
            'order_date' => now(),
        ]);

        // Seleziona un numero casuale di manga
        $mangas = Manga::inRandomOrder()->take(rand(1, 10))->get();

        // Associa i manga all'ordine
        foreach ($mangas as $manga) {
            $order->mangas()->attach($manga->id, ['quantity' => $faker->numberBetween(1, 3)]);
        }

        return redirect()->route('orders.index')->with('success', 'Ordine creato con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        $mangas = $order->mangas()->withPivot('quantity')->get();

        return view('admin.orders.show', [
            'order' => $order,
            'mangas' => $order->mangas,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('admin.orders.index')->with('success', 'Order deleted successfully!');
    }
}
