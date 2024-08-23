    <?php
    if (isset($_GET['n'])) {
        $name = $_GET['n'];
    }
    ?>


    <ul class="d-flex flex-column bg-white p-4 gap-2" style='height:90vh;'>
        <li
            class="d-flex <?php if (isset($name) && $name === 'home') echo 'active'; ?> rounded-3 p-3 gap-3 align-items-center">
            <div class="bi bi-blockquote-left"></div>
            <h6 class="m-0">
                <a class="text-decoration-none <?php if (isset($name) && $name === 'home') echo 'text-white'; ?>"
                    href="">
                    Dashboard
                </a>
            </h6>
        </li>
        <li
            class="d-flex rounded-3 p-3 gap-3 align-items-center <?php if (isset($name) && $name === 'courses') echo 'active'; ?>">
            <div class="bi bi-book"></div>
            <h6 class="m-0">
                <a class="text-decoration-none <?php if (isset($name) && $name === 'courses') echo 'text-white'; ?>"
                    href="">
                    Courses
                </a>
            </h6>
        </li>
        <li
            class="d-flex rounded-3 p-3 gap-3 align-items-center <?php if (isset($name) && $name === 'assignments') echo 'active'; ?>">
            <div class="bi bi-speedometer"></div>
            <h6 class="m-0">
                <a class="text-decoration-none <?php if (isset($name) && $name === 'assignments') echo 'text-white'; ?>"
                    href="">
                    Assignments
                </a>
            </h6>
        </li>
        <li
            class="d-flex rounded-3 p-3 gap-3 align-items-center <?php if (isset($name) && $name === 'attendance') echo 'active'; ?>">
            <div class="bi bi-speedometer"></div>
            <h6 class="m-0">
                <a class="text-decoration-none <?php if (isset($name) && $name === 'attendance') echo 'text-white'; ?>"
                    href="">
                    Attendance
                </a>
            </h6>
        </li>
        <li
            class="d-flex rounded-3 p-3 gap-3 align-items-center <?php if (isset($name) && $name === 'settings') echo 'active'; ?>">
            <div class="bi bi-gear"></div>
            <h6 class="m-0">
                <a class="text-decoration-none <?php if (isset($name) && $name === 'settings') echo 'text-white'; ?>"
                    href="">
                    Settings
                </a>
            </h6>
        </li>
    </ul>