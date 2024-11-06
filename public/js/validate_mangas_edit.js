// Seleziona il pulsante di invio
const submitButton = document.querySelector('button[type="submit"]');

// ---------------------------------------------
// VALIDAZIONE DEL PREZZO
const priceInput = document.getElementById('price');

priceInput.addEventListener('input', (e) => {
    const priceValue = e.target.value;

    // Rimuovi eventuali errori esistenti
    const errorMessages = priceInput.parentNode.querySelectorAll('.alert.alert-danger');
    errorMessages.forEach((error) => error.remove());

    // Controlla se il valore contiene caratteri speciali non accettati
    if (/[^0-9\.\-,]/.test(priceValue)) {
        const errorMessage = document.createElement('div');
        errorMessage.className = 'alert alert-danger';
        errorMessage.textContent = 'Questo carattere non è accettato.';
        priceInput.parentNode.appendChild(errorMessage);
        submitButton.disabled = true; // Disabilita il bottone
    } else if (parseFloat(priceValue) <= 0) {
        const errorMessage = document.createElement('div');
        errorMessage.className = 'alert alert-danger';
        errorMessage.textContent = 'Il prezzo deve essere un numero positivo.';
        priceInput.parentNode.appendChild(errorMessage);
        submitButton.disabled = true; // Disabilita il bottone
    } else {
        submitButton.disabled = false; // Abilita il bottone
    }
});

// ---------------------------------------------
// VALIDAZIONE DELL'IMMAGINE
const fileInput = document.getElementById('cover_image');

fileInput.addEventListener('change', (e) => {
    const file = e.target.files[0];

    // Rimuovi eventuali errori esistenti
    const errorMessages = fileInput.parentNode.querySelectorAll('.alert.alert-danger');
    errorMessages.forEach((error) => error.remove());

    // Verifica il nome del file
    if (file) {
        const fileName = file.name;
        if (/[^a-zA-Z0-9\._-]/.test(fileName)) {
            const errorMessage = document.createElement('div');
            errorMessage.className = 'alert alert-danger';
            errorMessage.textContent = 'Il nome del file contiene caratteri non validi.';
            fileInput.parentNode.appendChild(errorMessage);
            submitButton.disabled = true; // Disabilita il bottone
        } else if (!['image/png', 'image/jpeg', 'image/gif'].includes(file.type)) {
            const errorMessage = document.createElement('div');
            errorMessage.className = 'alert alert-danger';
            errorMessage.textContent = 'Il file selezionato non è un\'immagine valida. Sono accettati solo file .png, .jpg e .gif.';
            fileInput.parentNode.appendChild(errorMessage);
            submitButton.disabled = true; // Disabilita il bottone
        } else {
            submitButton.disabled = false; // Abilita il bottone
        }
    } else {
        submitButton.disabled = false; // Abilita il bottone se non c'è file
    }
});

// ---------------------------------------------
// VALIDAZIONE DEL TITOLO
const nameInput = document.getElementById('title');

nameInput.addEventListener('input', (e) => {
    const inputValue = e.target.value;

    // Rimuovi eventuali errori esistenti
    const errorMessages = nameInput.parentNode.querySelectorAll('.alert.alert-danger');
    errorMessages.forEach((error) => error.remove());

    const regex = /^[a-zA-Z\s]+$/;
    const minLength = 4;
    const maxLength = 50;

    if (inputValue !== '') {
        if (!regex.test(inputValue)) {
            const errorMessage = document.createElement('div');
            errorMessage.className = 'alert alert-danger';
            errorMessage.textContent = 'Sono ammessi solo lettere e spazi';
            nameInput.parentNode.appendChild(errorMessage);
            submitButton.disabled = true; // Disabilita il bottone
        } else if (inputValue.length < minLength) {
            const errorMessage = document.createElement('div');
            errorMessage.className = 'alert alert-danger';
            errorMessage.textContent = `Il nome deve avere almeno ${minLength} caratteri`;
            nameInput.parentNode.appendChild(errorMessage);
            submitButton.disabled = true; // Disabilita il bottone
        } else if (inputValue.length > maxLength) {
            const errorMessage = document.createElement('div');
            errorMessage.className = 'alert alert-danger';
            errorMessage.textContent = `Il nome deve avere non più di ${maxLength} caratteri`;
            nameInput.parentNode.appendChild(errorMessage);
            submitButton.disabled = true; // Disabilita il bottone
        } else {
            submitButton.disabled = false; // Abilita il bottone
        }
    } else {
        submitButton.disabled = false; // Abilita il bottone
    }
});

// ---------------------------------------------
// VALIDAZIONE DELLA DESCRIZIONE
const inputField = document.getElementById('description');

inputField.addEventListener('input', (e) => {
    const inputValue = e.target.value;

    // Rimuovi eventuali errori esistenti
    const errorMessages = inputField.parentNode.querySelectorAll('.alert.alert-danger');
    errorMessages.forEach((error) => error.remove());

    const minLength = 4;
    const maxLength = 255;
    const allowedChars = /^[a-zA-Z0-9\s.,()"\/\-]+$/;

    if (inputValue.length < minLength) {
        const errorMessage = document.createElement('div');
        errorMessage.className = 'alert alert-danger';
        errorMessage.textContent = `Errore: Inserisci almeno ${minLength} caratteri.`;
        inputField.parentNode.appendChild(errorMessage);
        submitButton.disabled = true; // Disabilita il bottone
    } else if (inputValue.length > maxLength) {
        const errorMessage = document.createElement('div');
        errorMessage.className = 'alert alert-danger';
        errorMessage.textContent = `Errore: Inserisci non più di ${maxLength} caratteri.`;
        inputField.parentNode.appendChild(errorMessage);
        submitButton.disabled = true; // Disabilita il bottone
    } else if (!allowedChars.test(inputValue)) {
        const errorMessage = document.createElement('div');
        errorMessage.className = 'alert alert-danger';
        errorMessage.textContent = `Errore: Sono consentiti solo lettere, numeri, spazi e i seguenti caratteri speciali: . , ( ) " / -`;
        inputField.parentNode.appendChild(errorMessage);
        submitButton.disabled = true; // Disabilita il bottone
    } else {
        submitButton.disabled = false; // Abilita il bottone
    }
});

// ---------------------------------------------
// VALIDAZIONE DEL CAMPO IN PROGRESS
const inProgressInput = document.getElementById('in_progress');

inProgressInput.addEventListener('change', (e) => {
    // Non è necessario un messaggio di errore, ma possiamo gestire la logica
    submitButton.disabled = false; // Abilita il bottone
});

// ---------------------------------------------
// VALIDAZIONE DEGLI ID (author_id, category_id, genre_id)
const authorIdInput = document.getElementById('author_id');
const categoryIdInput = document.getElementById('category_id');
const genreIdInput = document.getElementById('genre_id');

const validateSelect = (selectInput) => {
    const selectedValue = selectInput.value;

    // Rimuovi eventuali errori esistenti
    const errorMessages = selectInput.parentNode.querySelectorAll('.alert.alert-danger');
    errorMessages.forEach((error) => error.remove());

    if (selectedValue === '') {
        const errorMessage = document.createElement('div');
        errorMessage.className = 'alert alert-danger';
        errorMessage.textContent = 'Seleziona un valore valido.';
        selectInput.parentNode.appendChild(errorMessage);
        submitButton.disabled = true; // Disabilita il bottone
    } else {
        submitButton.disabled = false; // Abilita il bottone
    }
};

authorIdInput.addEventListener('change', () => validateSelect(authorIdInput));
categoryIdInput.addEventListener('change', () => validateSelect(categoryIdInput));
genreIdInput.addEventListener('change', () => validateSelect(genreIdInput));

// ---------------------------------------------
// VALIDAZIONE DELL'ANNO
const yearInput = document.getElementById('year');

yearInput.addEventListener('input', (e) => {
    const yearValue = e.target.value;

    // Rimuovi eventuali errori esistenti
    const errorMessages = yearInput.parentNode.querySelectorAll('.alert.alert-danger');
    errorMessages.forEach((error) => error.remove());

    // Controlla se l'anno è valido
    if (yearValue < 1900 || yearValue > 2100) {
        const errorMessage = document.createElement ('div');
        errorMessage.className = 'alert alert-danger';
        errorMessage.textContent = 'L\'anno deve essere compreso tra 1900 e 2100.';
        yearInput.parentNode.appendChild(errorMessage);
        submitButton.disabled = true; // Disabilita il bottone
    } else {
        submitButton.disabled = false; // Abilita il bottone
    }
});

// ---------------------------------------------
// VALIDAZIONE DEL VOLUME
const volumeInput = document.getElementById('volume');

volumeInput.addEventListener('input', (e) => {
    const volumeValue = e.target.value;

    // Rimuovi eventuali errori esistenti
    const errorMessages = volumeInput.parentNode.querySelectorAll('.alert.alert-danger');
    errorMessages.forEach((error) => error.remove());

    // Controlla se il volume è valido
    if (volumeValue < 1) {
        const errorMessage = document.createElement('div');
        errorMessage.className = 'alert alert-danger';
        errorMessage.textContent = 'Il volume deve essere un numero positivo.';
        volumeInput.parentNode.appendChild(errorMessage);
        submitButton.disabled = true; // Disabilita il bottone
    } else {
        submitButton.disabled = false; // Abilita il bottone
    }
});

// ---------------------------------------------
// PREVENZIONE DELLA SOTTOMISSIONE DEL FORM
submitButton.addEventListener('click', (e) => {
    if (submitButton.disabled) {
        e.preventDefault(); // Previene la sottomissione del form
    }
});
