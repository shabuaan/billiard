<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pool Billiard Association | Home</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .hero {
            background: linear-gradient(to right, #0d6efd, #003f8f);
            color: white;
            padding: 60px 20px;
            text-align: center;
            border-radius: 16px;
            margin-bottom: 40px;
        }

        .section-title {
            margin-bottom: 30px;
            font-weight: bold;
        }

        .opening-hours li {
            margin-bottom: 6px;
        }

        .highlight {
            background-color: #e9ecef;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 30px;
        }

        .map-embed {
            border: 0;
            width: 100%;
            height: 300px;
            border-radius: 10px;
        }

        footer {
            margin-top: 40px;
            padding: 20px 0;
            background-color: #0d6efd;
            color: white;
            text-align: center;
            border-radius: 12px;
        }
        .billiard-ball {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: white;
            margin: 4px;
        }
        .location-tab {
            padding: 8px 20px;
            border-radius: 50px;
            font-weight: bold;
            margin: 0 10px;
        }
    </style>
</head>
<body>

    <div class="container mt-4">
        <!-- Hero Section -->
        <div class="hero">
            <h1 class="display-5 fw-bold">Welcome to the Pool Billiard Association</h1>
            <p class="lead">Where precision meets passion. Join our community and experience the thrill of the game.</p>
            <a href="#membership" class="btn btn-light btn-lg mt-3">Become a Member</a>
        </div>

        <!-- Opening Hours & Contact -->
        <div class="row text-center mb-5">
            <div class="col-md-6">
                <h3 class="section-title">🏠 Opening Hours</h3>
                <ul class="list-unstyled opening-hours">
                    <li><strong>Monday - Thursday:</strong> 2:00 PM – 10:00 PM</li>
                    <li><strong>Friday:</strong> 2:00 PM – 12:00 AM</li>
                    <li><strong>Saturday:</strong> 12:00 PM – 12:00 AM</li>
                    <li><strong>Sunday:</strong> 12:00 PM – 10:00 PM</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h3 class="section-title">📍 Location & Contact</h3>
                <p>123 Cue Street, Malé, Maldives</p>
                <p>Email: <a href="mailto:info@billiardassociation.mv">info@billiardassociation.mv</a></p>
                <p>Phone: +960 123-4567</p>
            </div>
        </div>

        <!-- Event Highlights -->
        <div class="highlight text-center">
            <div class="container py-5">
    <!-- Location Tabs -->
    <div class="text-center mb-5">
        <button class="btn btn-primary location-tab">Malé</button>
        <button class="btn btn-light location-tab">Hulhumale</button>
    </div>

    <!-- Date Heading -->
    <div class="text-center mb-4">
        <h2 class="fw-bold">Today - Apr 28</h2>
    </div>

    <!-- Time Slots -->
    <div class="row gy-4">
        @foreach ($timeSlots as $slot)
        <div class="col-12">
            <div class="bg-dark text-white rounded p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="mb-0">{{ $slot['time'] }}</h5>
                    <small>{{ $slot['tables_left'] }} Tables left</small>
                </div>
                <div class="d-flex flex-wrap">
                    @foreach ($slot['tables'] as $table)
                    <button type="button" class="billiard-ball" style="background-color: {{ $table['color'] }};">
                        {{ $table['number'] }}
                    </button>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
        </div>

        <!-- Membership Section -->
        <div class="highlight text-center" id="membership">
            <h4 class="mb-3">🎱 Membership Benefits</h4>
            <ul class="list-unstyled">
                <li>✔ Unlimited table time on weekdays</li>
                <li>✔ Priority entry for tournaments</li>
                <li>✔ Member-only coaching sessions</li>
                <li>✔ Discounts on snacks & gear</li>
            </ul>
            <a href="#" class="btn btn-primary mt-3">Join Now</a>
        </div>

        <!-- Embedded Map -->
        <div class="highlight">
            <h4 class="text-center mb-3">📌 Find Us on the Map</h4>
            <iframe class="map-embed"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15834.621380971647!2d73.50199545!3d4.17549645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNMKwMTAnMzIuMCJOIDczwrAzMCcwMC4wIkU!5e0!3m2!1sen!2smv!4v1617022493134!5m2!1sen!2smv"
                allowfullscreen="" loading="lazy">
            </iframe>
        </div>

        <!-- Footer -->
        <footer>
            <p class="mb-0">&copy; 2025 Pool Billiard Association. All rights reserved.</p>
        </footer>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
