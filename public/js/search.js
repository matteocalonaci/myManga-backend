$(document).ready(function() {
        $('#author_id').select2({
            placeholder: "Seleziona un autore",
            allowClear: true,
            ajax: {
                url: '/admin/search-authors', // Update with your URL
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        q: params.term // Search term
                    };
                },
                processResults: function (data) {
                    return {
                        results: data.map(function(author) {
                            return {
                                id: author.id,
                                text: author.name
                            };
                        })
                    };
                },
                cache: true
            },
            minimumInputLength: 1 // Start searching after 1 character
        });
    });
