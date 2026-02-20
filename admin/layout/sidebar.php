<?php
$current_page = basename($_SERVER['PHP_SELF']);

/* Page Groups */

$dashboard_pages = ['admin-dashboard.php'];

$employee_mgmt_pages = [
    'employee-list.php',
    'employee-details.php',
    'departments.php',
    'designations.php',
    'policy.php'
];

$attendance_pages = ['attendance-report.php'];

$leave_pages = ['employee-leaves.php'];

$payroll_pages = [
    'employee-salary.php',
    'employee-payslip.php',
    'employee-payroll-summary.php'
];

$dsr_pages = ['employee-daily-status-report.php'];

$holiday_pages = ['holidays.php'];
?>

<div class="sidebar" id="sidebar">

    <!-- Logo -->
    <div class="sidebar-logo">
        <a href="admin-dashboard.php" class="logo logo-normal">
            <img src="assets/img/logo/aayaninfotech_logo2.png" alt="Logo">
        </a>
    </div>

    <div class="sidebar-inner slimscroll mt-3">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>

                <!-- Dashboard -->
                <li class="submenu <?php echo in_array($current_page,$dashboard_pages)?'active subdrop':''; ?>">
                    <a href="javascript:void(0);">
                        <i class="ti ti-smart-home"></i>
                        <span>Dashboard</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="<?php echo in_array($current_page,$dashboard_pages)?'display:block;':''; ?>">
                        <li>
                            <a href="admin-dashboard.php"
                               class="<?php echo ($current_page=='admin-dashboard.php')?'active':''; ?>">
                                Profile
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- Employee Management -->
                <li class="submenu <?php echo in_array($current_page,$employee_mgmt_pages)?'active subdrop':''; ?>">
                    <a href="javascript:void(0);">
                        <i class="ti ti-users"></i>
                        <span>Employee Management</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="<?php echo in_array($current_page,$employee_mgmt_pages)?'display:block;':''; ?>">
                        <li>
                            <a href="employee-list.php"
                               class="<?php echo ($current_page=='employee-list.php')?'active':''; ?>">
                                Employee Lists
                            </a>
                        </li>
                        <li>
                            <a href="employee-details.php"
                               class="<?php echo ($current_page=='employee-details.php')?'active':''; ?>">
                                Employee Details
                            </a>
                        </li>
                        <li>
                            <a href="departments.php"
                               class="<?php echo ($current_page=='departments.php')?'active':''; ?>">
                                Departments
                            </a>
                        </li>
                        <li>
                            <a href="designations.php"
                               class="<?php echo ($current_page=='designations.php')?'active':''; ?>">
                                Designations
                            </a>
                        </li>
                        <li>
                            <a href="policy.php"
                               class="<?php echo ($current_page=='policy.php')?'active':''; ?>">
                                Policies
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- Attendance -->
                <li class="submenu <?php echo in_array($current_page,$attendance_pages)?'active subdrop':''; ?>">
                    <a href="javascript:void(0);">
                        <i class="ti ti-file-time"></i>
                        <span>Attendance</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="<?php echo in_array($current_page,$attendance_pages)?'display:block;':''; ?>">
                        <li>
                            <a href="attendance-report.php"
                               class="<?php echo ($current_page=='attendance-report.php')?'active':''; ?>">
                                Attendance Report
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- Leaves -->
                <li class="submenu <?php echo in_array($current_page,$leave_pages)?'active subdrop':''; ?>">
                    <a href="javascript:void(0);">
                        <i class="ti ti-calendar"></i>
                        <span>Leaves</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="<?php echo in_array($current_page,$leave_pages)?'display:block;':''; ?>">
                        <li>
                            <a href="employee-leaves.php"
                               class="<?php echo ($current_page=='employee-leaves.php')?'active':''; ?>">
                                Employee Leaves
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- Holidays (Single Link) -->
                <li>
                    <a href="holidays.php"
                       class="<?php echo in_array($current_page,$holiday_pages)?'active':''; ?>">
                        <i class="ti ti-calendar-event"></i>
                        <span>Holidays</span>
                    </a>
                </li>


                <!-- Payroll -->
                <li class="submenu <?php echo in_array($current_page,$payroll_pages)?'active subdrop':''; ?>">
                    <a href="javascript:void(0);">
                        <i class="ti ti-cash"></i>
                        <span>Payroll</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="<?php echo in_array($current_page,$payroll_pages)?'display:block;':''; ?>">
                        <li>
                            <a href="employee-salary.php"
                               class="<?php echo ($current_page=='employee-salary.php')?'active':''; ?>">
                                Employee Salary
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


                <!-- Daily Status Report -->
                <li class="submenu <?php echo in_array($current_page,$dsr_pages)?'active subdrop':''; ?>">
                    <a href="javascript:void(0);">
                        <i class="ti ti-report"></i>
                        <span>Daily Status Report</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="<?php echo in_array($current_page,$dsr_pages)?'display:block;':''; ?>">
                        <li>
                            <a href="employee-daily-status-report.php"
                               class="<?php echo ($current_page=='employee-daily-status-report.php')?'active':''; ?>">
                                Daily Status Report
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>