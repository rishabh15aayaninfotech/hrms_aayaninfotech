<?php
$current_page = basename($_SERVER['PHP_SELF']);

/* Group Pages */
$dashboard_pages = ['employee-dashboard.php'];

$attendance_pages = ['employee-attendance.php'];

$leave_pages = ['employee-leaves.php'];

$finance_pages = [
    'employee-salary.php',
    'employee-payslip.php',
    'employee-payroll-summary.php'
];

$organization_pages = [
    'employee-directory.php',
    'organization-tree.php',
    'employee-documents.php'
];

$dsr_pages = ['employee-daily-status-report.php'];

$engage_pages = [
    'employee-announcements.php',
    'employee-pools.php'
];
?>

<div class="sidebar" id="sidebar">

    <!-- Logo -->
    <div class="sidebar-logo">
        <a href="employee-dashboard.php" class="logo logo-normal">
            <img src="assets/img/logo/aayaninfotech_logo2.png" alt="Logo">
        </a>
    </div>

    <div class="sidebar-inner slimscroll mt-3">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>

                <!-- Dashboard -->
                <li class="submenu <?php echo in_array($current_page,$dashboard_pages) ? 'active subdrop' : ''; ?>">
                    <a href="javascript:void(0);">
                        <i class="ti ti-smart-home"></i>
                        <span>Dashboard</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="<?php echo in_array($current_page,$dashboard_pages) ? 'display:block;' : ''; ?>">
                        <li>
                            <a href="employee-dashboard.php"
                               class="<?php echo ($current_page=='employee-dashboard.php')?'active':''; ?>">
                                Profile
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- Attendance -->
                <li class="submenu <?php echo in_array($current_page,$attendance_pages) ? 'active subdrop' : ''; ?>">
                    <a href="javascript:void(0);">
                        <i class="ti ti-file-time"></i>
                        <span>Attendance</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="<?php echo in_array($current_page,$attendance_pages) ? 'display:block;' : ''; ?>">
                        <li>
                            <a href="employee-attendance.php"
                               class="<?php echo ($current_page=='employee-attendance.php')?'active':''; ?>">
                                My Attendance
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- Leaves -->
                <li class="submenu <?php echo in_array($current_page,$leave_pages) ? 'active subdrop' : ''; ?>">
                    <a href="javascript:void(0);">
                        <i class="ti ti-calendar"></i>
                        <span>Leaves</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="<?php echo in_array($current_page,$leave_pages) ? 'display:block;' : ''; ?>">
                        <li>
                            <a href="employee-leaves.php"
                               class="<?php echo ($current_page=='employee-leaves.php')?'active':''; ?>">
                                My Leaves
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- Finance -->
                <li class="submenu <?php echo in_array($current_page,$finance_pages) ? 'active subdrop' : ''; ?>">
                    <a href="javascript:void(0);">
                        <i class="ti ti-cash"></i>
                        <span>Finance</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="<?php echo in_array($current_page,$finance_pages) ? 'display:block;' : ''; ?>">
                        <li>
                            <a href="employee-salary.php"
                               class="<?php echo ($current_page=='employee-salary.php')?'active':''; ?>">
                                My Salary
                            </a>
                        </li>
                        <li>
                            <a href="employee-payslip.php"
                               class="<?php echo ($current_page=='employee-payslip.php')?'active':''; ?>">
                                Payslip
                            </a>
                        </li>
                        <li>
                            <a href="employee-payroll-summary.php"
                               class="<?php echo ($current_page=='employee-payroll-summary.php')?'active':''; ?>">
                                Summary
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- Organization -->
                <li class="submenu <?php echo in_array($current_page,$organization_pages) ? 'active subdrop' : ''; ?>">
                    <a href="javascript:void(0);">
                        <i class="ti ti-building"></i>
                        <span>Organization</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="<?php echo in_array($current_page,$organization_pages) ? 'display:block;' : ''; ?>">
                        <li>
                            <a href="employee-directory.php"
                               class="<?php echo ($current_page=='employee-directory.php')?'active':''; ?>">
                                Employee Directory
                            </a>
                        </li>
                        <li>
                            <a href="organization-tree.php"
                               class="<?php echo ($current_page=='organization-tree.php')?'active':''; ?>">
                                Organization Tree
                            </a>
                        </li>
                        <li>
                            <a href="employee-documents.php"
                               class="<?php echo ($current_page=='employee-documents.php')?'active':''; ?>">
                                Documents
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- Daily Status Report -->
                <li class="submenu <?php echo in_array($current_page,$dsr_pages) ? 'active subdrop' : ''; ?>">
                    <a href="javascript:void(0);">
                        <i class="ti ti-report"></i>
                        <span>Daily Status Report</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="<?php echo in_array($current_page,$dsr_pages) ? 'display:block;' : ''; ?>">
                        <li>
                            <a href="employee-daily-status-report.php"
                               class="<?php echo ($current_page=='employee-daily-status-report.php')?'active':''; ?>">
                                Daily Status Report
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- Engage -->
                <li class="submenu <?php echo in_array($current_page,$engage_pages) ? 'active subdrop' : ''; ?>">
                    <a href="javascript:void(0);">
                        <i class="ti ti-bell"></i>
                        <span>Engage</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="<?php echo in_array($current_page,$engage_pages) ? 'display:block;' : ''; ?>">
                        <li>
                            <a href="employee-announcements.php"
                               class="<?php echo ($current_page=='employee-announcements.php')?'active':''; ?>">
                                Announcements
                            </a>
                        </li>
                        <li>
                            <a href="employee-pools.php"
                               class="<?php echo ($current_page=='employee-pools.php')?'active':''; ?>">
                                Pools
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>