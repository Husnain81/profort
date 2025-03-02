{{-- header file --}}
@include('partials.Header')

{{-- navbar/topbar --}}
@include('components.Navbar')

{{-- breadcrum --}}
@include ('components.Breadcrumb')

{{-- heading --}}
<div class="container">
    <!-- Alarm Section (Left Side) -->
    <div class="alarm-container">
        <div class="alarm-title">
            <h2>Alarm Log</h2>
        </div>
        <div class="alarm-badge"><span>10</span></div>
    </div>

    <!-- Right Side Group (Calendar + Icons) -->
    <div class="right-group">
        <!-- Date Picker (Calendar) -->
        <div class="calendar-container" id="calendarTrigger">
            <div class="calendar-icon"><i class="fa-regular fa-calendar"></i></div>
            <div class="calendar-text" id="calendarText">26 Dec 2024 - 08 Jan 2025</div>
            <div class="dropdown-icon"><i class="fa-solid fa-angle-down"></i></div>
        </div>
    
        <!-- Hidden Date Input (Used by Flatpickr) -->
        <input type="text" id="calendarInput" class="hidden-input">

        <!-- Settings Icon -->
        <div class="icon-container">
            <i class="fa-solid fa-gear"></i>
        </div>

        <!-- More Options Icon -->
        <div class="icon-container">
            <i class="fa-solid fa-ellipsis-vertical"></i>
        </div>
    </div>
</div>

{{-- tabs --}}
<div class="tab-container">
    <!-- Active Tab (Alarm Log) -->
    <div class="tab active">
        <span>Alarm Log</span>
        <div class="tab-indicator"></div>
    </div>

    <!-- Other Tabs -->
    <div class="tab"><span>Pumpeantal</span></div>
    <div class="tab"><span>Pumping Time</span></div>
    <div class="tab"><span>Analog Measurements</span></div>
</div>

{{-- table --}}
@include('pages.mainpage.Table')

{{-- pagination --}}
@include('components.Pagination')

{{-- footer --}}
@include('partials.Footer')
