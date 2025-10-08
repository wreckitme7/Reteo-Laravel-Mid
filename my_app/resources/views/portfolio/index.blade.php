@extends('layouts.portfolio')

@section('title', 'Computer Parts Info Hub')

@section('content')

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <img src="{{ asset('images/computer-parts-banner.jpg') }}" alt="Computer Parts" class="profile-img">
        <h1 class="display-4 mb-3">Welcome to Ralph Reteo Computer Parts Info</h1>
        <h3 class="mb-4">AKO BAHALA SAINYO</h3>
        <p class="lead mb-4">
            This website provides clear, beginner-friendly information about the essential parts of a computer, including their functions, types, and what to look for when buying.
        </p>
    </div>
</section>

<!-- About Section -->
<section id="about" class="section">
    <div class="container">
        <h2 class="section-title">What Are Computer Parts?</h2>
        <p>
            A computer is made up of various components that work together to perform operations. Some parts are visible and physical (hardware), while others are digital (software). This site focuses on hardware—like the CPU, RAM, motherboard, and more.
        </p>
    </div>
</section>

<!-- Components Section -->
<section id="components" class="section bg-light">
    <div class="container">
        <h2 class="section-title">Key Computer Components</h2>

         <div class="component mb-5 text-center">
            <h3>1. Central Processing Unit (CPU)</h3>
            <a href="https://www.waferworld.com/post/building-a-gaming-pc-unleashing-power-and-understanding-the-role-of-silicon-wafers" target="_blank">
                <img src="https://cdn.prod.website-files.com/60a3c1fc44c5715c395770e7/649edc7c4e62aa0c0f6c34c2_A%20CPU%20made%20with%20silicon%20wafers..jpg" alt="CPU Image" class="component-img">
            </a>
            <p class="mt-3">
                The CPU is the brain of the computer. It processes instructions and performs calculations. Common brands: Intel, AMD.
            </p>
        </div>

        <div class="component mb-5 text-center">
            <h3>2. Graphics Processing Unit (GPU)</h3>
            <a href="https://www.techspot.com/news/102072-pc-gpu-shipments-increased-20-last-quarter-ai.html" target="_blank">
                <img src="https://cdn.mos.cms.futurecdn.net/BzMoyxH2yb8txPCj2oZxCc-970-80.jpg" alt="GPU Image" class="component-img">
            </a>
            <p class="mt-3">
                The GPU handles rendering images, videos, and animations. It's essential for gaming, video editing, and 3D modeling.
            </p>
        </div>

        <div class="component mb-5">
            <h3>3. Motherboard</h3>
            <a href="https://www.mouser.ph/new/advantech/advantech-aimb-787-board/" target="_blank">
                <img src="https://www.mouser.ph/images/marketingid/2020/img/110657914.png?v=061025.0736" alt="Motherboard Image" style="max-width: 100%; height: auto;">
            </a>
            <p>
                The motherboard is the main circuit board connecting all components. It determines compatibility and connectivity.
            </p>
        </div>

        <div class="component mb-5">
            <h3>4. RAM (Memory)</h3>
            <a href="https://www.computerhope.com/jargon/r/ram.htm" target="_blank">
                <img src="https://www.computerhope.com/jargon/m/memory-ddr4.png" alt="RAM Image" style="max-width: 100%; height: auto;">
            </a>
            <p>
                RAM temporarily stores data the CPU needs. More RAM allows for better multitasking and performance.
            </p>
        </div>

        <div class="component mb-5">
            <h3>5. Storage (HDD/SSD)</h3>
            <a href="https://www.backblaze.com/blog/ssd-vs-hdd-future-of-storage/" target="_blank">
                <img src="https://www.backblaze.com/blog/wp-content/uploads/2018/03/hdd_vs_ssd_bz.png" alt="Storage Image" style="max-width: 100%; height: auto;">
            </a>
            <p>
                Storage devices hold your operating system, applications, and files. SSDs are faster than traditional HDDs.
            </p>
        </div>

        <div class="component mb-5">
            <h3>6. Power Supply Unit (PSU)</h3>
            <a href="https://www.ubuy.com.ph/product/MVAVXFSNG-gamepower-gp-650-pc-power-supply-unit-650w-80-plus-bronze-certified-85-efficiency-single-12v-rail-low-noise-14-cm-fan-ideal-for-gaming-pcs" target="_blank">
                <img src="https://m.media-amazon.com/images/I/717hw9FyNIL._AC_SL1351_.jpg" alt="PSU Image" style="max-width: 100%; height: auto;">
            </a>
            <p>
                The PSU converts electricity from the wall into usable power for your components.
            </p>
        </div>

        <div class="component mb-5">
            <h3>7. Computer Case</h3>
            <a href="https://ecommerce.datablitz.com.ph/products/corsair-6500x-tempered-glass-atx-mid-tower-dual-chamber-pc-case-black" target="_blank">
                <img src="https://ecommerce.datablitz.com.ph/cdn/shop/files/6500X_BLACK_RENDER_15_800x.jpg?v=1758446427" alt="PC Case Image" style="max-width: 100%; height: auto;">
            </a>
            <p>
                The case houses all components and affects airflow, cooling, and aesthetics.
            </p>
        </div>

    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="section">
    <div class="container">
        <h2 class="section-title">Get In Touch</h2>
        <p>If you have questions about computer parts or need help building a PC, feel free to reach out!</p>
        <!-- Contact form or info can go here -->
    </div>
</section>

@endsection
