<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$slot}}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'gym-primary': '#0c3c44',
                        'gym-secondary': '#19657c',
                        'gym-accent': '#fdb03e',
                        'gym-accent-dark': '#d38620',
                        'gym-bg': '#fff6e7'
                    }
                }
            }
        }
    </script>
</head>