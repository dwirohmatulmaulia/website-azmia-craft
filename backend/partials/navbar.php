<div class="dashboard-main-wrapper">
    <div class="dashboard-header">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:#1F1F2E">
            <div class="container-fluid d-flex justify-content-between align-items-center">
                <!-- Bagian kiri: Judul -->
                <div class="d-flex align-items-center">
                    <a class="navbar-brand d-block text-center" href="#"
                        style="margin-top:8px; font-weight:bold; font-size:20px; line-height:1.2;">
                        WEBSITE<br>
                        <small style="font-weight:normal; font-size:14px; color: #ffffff;">
                            AZMIA CRAFT
                        </small>
                    </a>
                </div>

                <!-- Bagian tengah: Jam & tanggal -->
                <div class="text-center text-white font-weight-bold" id="clock" style="flex:1; font-size:22px;"></div>

                <!-- Bagian kanan: Icon user + Dark Mode -->
                <ul class="navbar-nav ml-auto navbar-right-top d-flex align-items-center">
                    <!-- Dark Mode Toggle -->
                    <li class="nav-item me-2">
                        <button id="darkModeToggle" class="btn btn-sm btn-primary">🌙 Dark Mode</button>
                    </li>
                </ul>
            </div>
        </nav>

    </div>
</div>

<script>
    // === Jam dan tanggal real-time ===
    function updateClock() {
        const now = new Date();
        const options = {
            weekday: 'long',
            day: '2-digit',
            month: 'long',
            year: 'numeric'
        };
        const dateStr = now.toLocaleDateString('id-ID', options);
        const timeStr = now.toLocaleTimeString('id-ID');
        document.getElementById('clock').textContent = `${dateStr} | ${timeStr}`;
    }
    setInterval(updateClock, 1000);
    updateClock();

    // === Tombol Dark Mode ===
    const toggle = document.getElementById("darkModeToggle");
    toggle.addEventListener("click", function() {
        document.body.classList.toggle("dark-mode");
        if (document.body.classList.contains("dark-mode")) {
            toggle.innerHTML = "☀️ Light Mode";
        } else {
            toggle.innerHTML = "🌙 Dark Mode";
        }
    });
</script>

<style>
    /* ===============================
           DARK MODE - MAROON
           =============================== */
    body.dark-mode {
        background-color: #2b0000 !important;
        color: #000000;
        /* text default hitam, akan berubah putih di dark mode */
        transition: all 0.5s ease;
    }

    /* Sidebar full maroon saat dark mode */
    body.dark-mode .nav-left-sidebar,
    body.dark-mode .nav-left-sidebar .menu-list,
    body.dark-mode .nav-left-sidebar .navbar,
    body.dark-mode .nav-left-sidebar .navbar-nav,
    body.dark-mode .nav-left-sidebar .navbar-nav .nav-item,
    body.dark-mode .nav-left-sidebar .navbar-nav .nav-link,
    body.dark-mode .nav-left-sidebar .nav-divider {
        background-color: #800000 !important;
        color: #ffffff !important;
    }

    body.dark-mode .nav-left-sidebar .navbar-nav .nav-link:hover,
    body.dark-mode .nav-left-sidebar .navbar-nav .nav-link.active {
        background-color: #A52A2A !important;
        color: #ffffff !important;
        border-radius: 6px;
    }

    body.dark-mode .nav-left-sidebar .collapse-inner {
        background-color: #800000 !important;
    }

    /* Navbar, Footer, Card, Table, Inputs */
    body.dark-mode .navbar,
    body.dark-mode footer,
    body.dark-mode .footer,
    body.dark-mode .footer-copyright,
    body.dark-mode .card,
    body.dark-mode .card-header,
    body.dark-mode table,
    body.dark-mode table th,
    body.dark-mode table td,
    body.dark-mode input,
    body.dark-mode select,
    body.dark-mode textarea {
        background-color: #800000 !important;
        color: #ffffff !important;
        border-color: #4d0000 !important;
    }

    body.dark-mode input::placeholder,
    body.dark-mode textarea::placeholder {
        color: #dddddd !important;
        opacity: 0.7;
    }

    body.dark-mode input:focus,
    body.dark-mode select:focus,
    body.dark-mode textarea:focus {
        outline: none !important;
        border-color: #ff4d4d !important;
        box-shadow: 0 0 5px #ff4d4d !important;
    }

    /* Navbar links & hover */
    body.dark-mode .navbar-nav .nav-link,
    body.dark-mode .dropdown-item {
        color: #ffffff !important;
    }

    body.dark-mode .navbar-nav .nav-link:hover,
    body.dark-mode .navbar-nav .nav-link.active,
    body.dark-mode .dropdown-item:hover {
        background-color: #A52A2A !important;
        color: #ffffff !important;
    }

    /* Tombol Dark Mode */
    #darkModeToggle {
        background-color: #8B0000;
        border-color: #8B0000;
        color: #fff;
    }

    #darkModeToggle:hover {
        background-color: #A52A2A;
        border-color: #A52A2A;
    }

    body.dark-mode #darkModeToggle {
        background-color: #ffffff !important;
        border-color: #ffffff !important;
        color: #800000 !important;
        font-weight: bold;
    }

    /* Tombol Tambah (+) tetap biru */
    .btn-add {
        background-color: #007bff !important;
        border-color: #007bff !important;
        color: #fff !important;
    }

    .btn-add:hover {
        background-color: #0069d9 !important;
        border-color: #0062cc !important;
    }

    body.dark-mode .btn-add {
        background-color: #007bff !important;
        border-color: #007bff !important;
        color: #fff !important;
    }

    /* Teks tetap hitam default, berubah putih saat dark mode */
    body p,
    body h1,
    body h2,
    body h3,
    body h4,
    body h5,
    body h6,
    body a,
    body label,
    body small {
        color: #000000;
    }

    body.dark-mode p,
    body.dark-mode h1,
    body.dark-mode h2,
    body.dark-mode h3,
    body.dark-mode h4,
    body.dark-mode h5,
    body.dark-mode h6,
    body.dark-mode a,
    body.dark-mode label,
    body.dark-mode small {
        color: #ffffff !important;
    }

    /* Ikon tetap terlihat jelas */
    body.dark-mode i {
        filter: brightness(100%) !important;
        color: inherit !important;
    }
</style>