<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.2/cdn.min.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="{{ asset('js/user-management.js') }}" defer></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        html,
        body {
            font-family: 'Inter', sans-serif;
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .glass-effect {
            backdrop-filter: blur(8px);
            background: rgba(255, 255, 255, 0.85);
        }

        .sidebar-link {
            transition: all 0.3s ease;
        }

        .sidebar-link:hover {
            background-color: rgba(99, 102, 241, 0.1);
        }

        .sidebar-link.active {
            background-color: rgba(99, 102, 241, 0.15);
            border-left: 3px solid #6366f1;
        }

        .card-stats {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-stats:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(99, 102, 241, 0.25);
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: rgba(243, 244, 246, 0.1);
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background-color: rgba(107, 114, 128, 0.3);
            border-radius: 20px;
        }

        main.content-area {
            max-height: calc(100vh - 138px);
            overflow-y: auto;
        }

        .blob {
            position: absolute;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            filter: blur(80px);
            z-index: 0;
            pointer-events: none;
            opacity: 0.3;
        }

        .badge-active {
            background-color: rgba(16, 185, 129, 0.1);
            color: #10B981;
        }

        .badge-inactive {
            background-color: rgba(239, 68, 68, 0.1);
            color: #EF4444;
        }

        .badge-pending {
            background-color: rgba(245, 158, 11, 0.1);
            color: #F59E0B;
        }

        .modal-backdrop {
            background-color: rgba(17, 24, 39, 0.7);
            backdrop-filter: blur(3px);
        }
    </style>
</head>

<body>
    {{ $slot }}
</body>

</html>
