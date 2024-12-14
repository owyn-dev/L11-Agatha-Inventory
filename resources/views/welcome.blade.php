<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vertical Navbar - Mazer Admin Dashboard</title>

    <link type="image/x-icon" href="data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2033%2034'%20fill-rule='evenodd'%20stroke-linejoin='round'%20stroke-miterlimit='2'%20xmlns:v='https://vecta.io/nano'%3e%3cpath%20d='M3%2027.472c0%204.409%206.18%205.552%2013.5%205.552%207.281%200%2013.5-1.103%2013.5-5.513s-6.179-5.552-13.5-5.552c-7.281%200-13.5%201.103-13.5%205.513z'%20fill='%23435ebe'%20fill-rule='nonzero'/%3e%3ccircle%20cx='16.5'%20cy='8.8'%20r='8.8'%20fill='%2341bbdd'/%3e%3c/svg%3e" rel="shortcut icon">
    <link type="image/png" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC" rel="shortcut icon">
    <link href="{{ asset('storage/assets/compiled/css/app.css') }}" rel="stylesheet" crossorigin>
  </head>

  <body>
    <div id="app">
      <div id="sidebar">
        <div class="sidebar-wrapper active">
          <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
              <div class="logo fs-3">
                <a href="index.html">Agatha Inventory</a>
              </div>
            </div>
          </div>
          <div class="sidebar-menu">
            <ul class="menu">
              <li class="sidebar-title">Menu</li>

              <li class="sidebar-item  ">
                <a class='sidebar-link' href="index.html">
                  <i class="bi bi-grid-fill"></i>
                  <span>Dashboard</span>
                </a>

              </li>

              <li class="sidebar-item  has-sub">
                <a class='sidebar-link' href="#">
                  <i class="bi bi-stack"></i>
                  <span>Components</span>
                </a>

                <ul class="submenu ">

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="component-accordion.html">Accordion</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="component-alert.html">Alert</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="component-badge.html">Badge</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="component-breadcrumb.html">Breadcrumb</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="component-button.html">Button</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="component-card.html">Card</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="component-carousel.html">Carousel</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="component-collapse.html">Collapse</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="component-dropdown.html">Dropdown</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="component-list-group.html">List Group</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="component-modal.html">Modal</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="component-navs.html">Navs</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="component-pagination.html">Pagination</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="component-placeholder.html">Placeholder</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="component-progress.html">Progress</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="component-spinner.html">Spinner</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="component-toasts.html">Toasts</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="component-tooltip.html">Tooltip</a>

                  </li>

                </ul>

              </li>

              <li class="sidebar-item  has-sub">
                <a class='sidebar-link' href="#">
                  <i class="bi bi-collection-fill"></i>
                  <span>Extra Components</span>
                </a>

                <ul class="submenu ">

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="extra-component-avatar.html">Avatar</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="extra-component-comment.html">Comment</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="extra-component-divider.html">Divider</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="extra-component-date-picker.html">Date Picker</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="extra-component-flag.html">Flag</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="extra-component-sweetalert.html">Sweet Alert</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="extra-component-toastify.html">Toastify</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="extra-component-rating.html">Rating</a>

                  </li>

                </ul>

              </li>

              <li class="sidebar-item active has-sub">
                <a class='sidebar-link' href="#">
                  <i class="bi bi-grid-1x2-fill"></i>
                  <span>Layouts</span>
                </a>

                <ul class="submenu active">

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="layout-default.html">Default Layout</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="layout-vertical-1-column.html">1 Column</a>

                  </li>

                  <li class="submenu-item active ">
                    <a class="submenu-link" href="layout-vertical-navbar.html">Vertical Navbar</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="layout-rtl.html">RTL Layout</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="layout-horizontal.html">Horizontal Menu</a>

                  </li>

                </ul>

              </li>

              <li class="sidebar-title">Forms &amp; Tables</li>

              <li class="sidebar-item  has-sub">
                <a class='sidebar-link' href="#">
                  <i class="bi bi-hexagon-fill"></i>
                  <span>Form Elements</span>
                </a>

                <ul class="submenu ">

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="form-element-input.html">Input</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="form-element-input-group.html">Input Group</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="form-element-select.html">Select</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="form-element-radio.html">Radio</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="form-element-checkbox.html">Checkbox</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="form-element-textarea.html">Textarea</a>

                  </li>

                </ul>

              </li>

              <li class="sidebar-item  ">
                <a class='sidebar-link' href="form-layout.html">
                  <i class="bi bi-file-earmark-medical-fill"></i>
                  <span>Form Layout</span>
                </a>

              </li>

              <li class="sidebar-item  has-sub">
                <a class='sidebar-link' href="#">
                  <i class="bi bi-journal-check"></i>
                  <span>Form Validation</span>
                </a>

                <ul class="submenu ">

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="form-validation-parsley.html">Parsley</a>

                  </li>

                </ul>

              </li>

              <li class="sidebar-item  has-sub">
                <a class='sidebar-link' href="#">
                  <i class="bi bi-pen-fill"></i>
                  <span>Form Editor</span>
                </a>

                <ul class="submenu ">

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="form-editor-quill.html">Quill</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="form-editor-ckeditor.html">CKEditor</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="form-editor-summernote.html">Summernote</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="form-editor-tinymce.html">TinyMCE</a>

                  </li>

                </ul>

              </li>

              <li class="sidebar-item  ">
                <a class='sidebar-link' href="table.html">
                  <i class="bi bi-grid-1x2-fill"></i>
                  <span>Table</span>
                </a>

              </li>

              <li class="sidebar-item  has-sub">
                <a class='sidebar-link' href="#">
                  <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                  <span>Datatables</span>
                </a>

                <ul class="submenu ">

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="table-datatable.html">Datatable</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="table-datatable-jquery.html">Datatable (jQuery)</a>

                  </li>

                </ul>

              </li>

              <li class="sidebar-title">Extra UI</li>

              <li class="sidebar-item  has-sub">
                <a class='sidebar-link' href="#">
                  <i class="bi bi-pentagon-fill"></i>
                  <span>Widgets</span>
                </a>

                <ul class="submenu ">

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="ui-widgets-chatbox.html">Chatbox</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="ui-widgets-pricing.html">Pricing</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="ui-widgets-todolist.html">To-do List</a>

                  </li>

                </ul>

              </li>

              <li class="sidebar-item  has-sub">
                <a class='sidebar-link' href="#">
                  <i class="bi bi-egg-fill"></i>
                  <span>Icons</span>
                </a>

                <ul class="submenu ">

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="ui-icons-bootstrap-icons.html">Bootstrap Icons </a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="ui-icons-fontawesome.html">Fontawesome</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="ui-icons-dripicons.html">Dripicons</a>

                  </li>

                </ul>

              </li>

              <li class="sidebar-item  has-sub">
                <a class='sidebar-link' href="#">
                  <i class="bi bi-bar-chart-fill"></i>
                  <span>Charts</span>
                </a>

                <ul class="submenu ">

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="ui-chart-chartjs.html">ChartJS</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="ui-chart-apexcharts.html">Apexcharts</a>

                  </li>

                </ul>

              </li>

              <li class="sidebar-item  ">
                <a class='sidebar-link' href="ui-file-uploader.html">
                  <i class="bi bi-cloud-arrow-up-fill"></i>
                  <span>File Uploader</span>
                </a>

              </li>

              <li class="sidebar-item  has-sub">
                <a class='sidebar-link' href="#">
                  <i class="bi bi-map-fill"></i>
                  <span>Maps</span>
                </a>

                <ul class="submenu ">

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="ui-map-google-map.html">Google Map</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="ui-map-jsvectormap.html">JS Vector Map</a>

                  </li>

                </ul>

              </li>

              <li class="sidebar-item  has-sub">
                <a class='sidebar-link' href="#">
                  <i class="bi bi-three-dots"></i>
                  <span>Multi-level Menu</span>
                </a>

                <ul class="submenu ">

                  <li class="submenu-item  has-sub">
                    <a class="submenu-link" href="#">First Level</a>

                    <ul class="submenu submenu-level-2 ">

                      <li class="submenu-item ">
                        <a class="submenu-link" href="ui-multi-level-menu.html">Second Level</a>
                      </li>

                    </ul>

                  </li>

                  <li class="submenu-item  has-sub">
                    <a class="submenu-link" href="#">Another Menu</a>

                    <ul class="submenu submenu-level-2 ">

                      <li class="submenu-item ">
                        <a class="submenu-link" href="ui-multi-level-menu.html">Second Level Menu</a>
                      </li>

                    </ul>

                  </li>

                </ul>

              </li>

              <li class="sidebar-title">Pages</li>

              <li class="sidebar-item  ">
                <a class='sidebar-link' href="application-email.html">
                  <i class="bi bi-envelope-fill"></i>
                  <span>Email Application</span>
                </a>

              </li>

              <li class="sidebar-item  ">
                <a class='sidebar-link' href="application-chat.html">
                  <i class="bi bi-chat-dots-fill"></i>
                  <span>Chat Application</span>
                </a>

              </li>

              <li class="sidebar-item  ">
                <a class='sidebar-link' href="application-gallery.html">
                  <i class="bi bi-image-fill"></i>
                  <span>Photo Gallery</span>
                </a>

              </li>

              <li class="sidebar-item  ">
                <a class='sidebar-link' href="application-checkout.html">
                  <i class="bi bi-basket-fill"></i>
                  <span>Checkout Page</span>
                </a>

              </li>

              <li class="sidebar-item  has-sub">
                <a class='sidebar-link' href="#">
                  <i class="bi bi-person-circle"></i>
                  <span>Account</span>
                </a>

                <ul class="submenu ">

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="account-profile.html">Profile</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="account-security.html">Security</a>

                  </li>

                </ul>

              </li>

              <li class="sidebar-item  has-sub">
                <a class='sidebar-link' href="#">
                  <i class="bi bi-person-badge-fill"></i>
                  <span>Authentication</span>
                </a>

                <ul class="submenu ">

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="auth-login.html">Login</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="auth-register.html">Register</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="auth-forgot-password.html">Forgot Password</a>

                  </li>

                </ul>

              </li>

              <li class="sidebar-item  has-sub">
                <a class='sidebar-link' href="#">
                  <i class="bi bi-x-octagon-fill"></i>
                  <span>Errors</span>
                </a>

                <ul class="submenu ">

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="error-403.html">403</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="error-404.html">404</a>

                  </li>

                  <li class="submenu-item  ">
                    <a class="submenu-link" href="error-500.html">500</a>

                  </li>

                </ul>

              </li>

              <li class="sidebar-title">Raise Support</li>

              <li class="sidebar-item  ">
                <a class='sidebar-link' href="https://zuramai.github.io/mazer/docs">
                  <i class="bi bi-life-preserver"></i>
                  <span>Documentation</span>
                </a>

              </li>

              <li class="sidebar-item  ">
                <a class='sidebar-link' href="https://github.com/zuramai/mazer/blob/main/CONTRIBUTING.md">
                  <i class="bi bi-puzzle"></i>
                  <span>Contribute</span>
                </a>

              </li>

              <li class="sidebar-item  ">
                <a class='sidebar-link' href="https://github.com/zuramai/mazer#donation">
                  <i class="bi bi-cash"></i>
                  <span>Donate</span>
                </a>

              </li>

            </ul>
          </div>
        </div>
      </div>
      <div class='layout-navbar navbar-fixed' id="main">
        <header>
          <nav class="navbar navbar-expand navbar-light navbar-top">
            <div class="container-fluid">
              <a class="burger-btn d-block" href="#">
                <i class="bi bi-justify fs-3"></i>
              </a>

              <button data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" type="button">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-lg-0">
                  <li class="nav-item dropdown me-3">
                    <a data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" class="nav-link active dropdown-toggle text-gray-600" href="#">
                      <i class='bi bi-bell bi-sub fs-4'></i>
                      <span class="badge badge-notification bg-danger">7</span>
                    </a>
                    <ul aria-labelledby="dropdownMenuButton" class="dropdown-menu dropdown-center  dropdown-menu-sm-end notification-dropdown">
                      <li class="dropdown-header">
                        <h6>Notifications</h6>
                      </li>
                      <li class="dropdown-item notification-item">
                        <a class="d-flex align-items-center" href="#">
                          <div class="notification-icon bg-primary">
                            <i class="bi bi-cart-check"></i>
                          </div>
                          <div class="notification-text ms-4">
                            <p class="notification-title font-bold">Successfully check out</p>
                            <p class="notification-subtitle font-thin text-sm">Order ID #256</p>
                          </div>
                        </a>
                      </li>
                      <li class="dropdown-item notification-item">
                        <a class="d-flex align-items-center" href="#">
                          <div class="notification-icon bg-success">
                            <i class="bi bi-file-earmark-check"></i>
                          </div>
                          <div class="notification-text ms-4">
                            <p class="notification-title font-bold">Homework submitted</p>
                            <p class="notification-subtitle font-thin text-sm">Algebra math homework</p>
                          </div>
                        </a>
                      </li>
                      <li>
                        <p class="text-center py-2 mb-0"><a href="#">See all notification</a></p>
                      </li>
                    </ul>
                  </li>
                </ul>
                <div class="dropdown">
                  <a data-bs-toggle="dropdown" aria-expanded="false" href="#">
                    <div class="user-menu d-flex">
                      <div class="user-name text-end me-3">
                        <h6 class="mb-0 text-gray-600">John Ducky</h6>
                        <p class="mb-0 text-sm text-gray-600">Administrator</p>
                      </div>
                      <div class="user-img d-flex align-items-center">
                        <div class="avatar avatar-md">
                          <img src="{{ asset('storage/assets/compiled/jpg/1.jpg') }}">
                        </div>
                      </div>
                    </div>
                  </a>
                  <ul aria-labelledby="dropdownMenuButton" class="dropdown-menu dropdown-menu-end" style="min-width: 11rem;">
                    <li>
                      <h6 class="dropdown-header">Hello, John!</h6>
                    </li>
                    <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-person me-2"></i> My Profile</a></li>
                    <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </header>
        <div id="main-content">

          <div class="page-heading">
            <div class="page-title">
              <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                  <h3>Vertical Layout with Navbar</h3>
                  <p class="text-subtitle text-muted">Navbar will appear on the top of the page.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                  <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                      <li aria-current="page" class="breadcrumb-item active">Layout Vertical Navbar</li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
            <section class="section">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">About Vertical Navbar</h4>
                </div>
                <div class="card-body">
                  <p>Vertical Navbar is a layout option that you can use with Mazer. </p>

                  <p>In case you want the navbar to be sticky on top while scrolling, add <code>.navbar-fixed</code> class alongside with <code>.layout-navbar</code> class.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Dummy Text</h4>
                </div>
                <div class="card-body">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mollis tincidunt tempus. Duis vitae facilisis enim, at rutrum lacus. Nam at nisl ut ex egestas placerat sodales id quam. Aenean sit amet nibh quis lacus pellentesque venenatis vitae at justo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse venenatis tincidunt odio ut rutrum. Maecenas ut urna venenatis, dapibus tortor sed, ultrices justo. Phasellus scelerisque, nibh quis gravida venenatis, nibh mi lacinia est, et porta purus nisi eget nibh. Fusce pretium vestibulum sagittis. Donec sodales velit cursus convallis sollicitudin. Nunc vel scelerisque elit, eget facilisis tellus. Donec id molestie ipsum. Nunc tincidunt tellus sed felis vulputate euismod.
                  </p>
                  <p>
                    Proin accumsan nec arcu sit amet volutpat. Proin non risus luctus, tempus quam quis, volutpat orci. Phasellus commodo arcu dui, ut convallis quam sodales maximus. Aenean sollicitudin massa a quam fermentum, et efficitur metus convallis. Curabitur nec laoreet ipsum, eu congue sem. Nunc pellentesque quis erat at gravida. Vestibulum dapibus efficitur felis, vel luctus libero congue eget. Donec mollis pellentesque arcu, eu commodo nunc porta sit amet. In commodo augue id mauris tempor, sed dignissim nulla facilisis. Ut non mattis justo, ut placerat justo. Vestibulum scelerisque cursus facilisis. Suspendisse velit justo, scelerisque ac ultrices eu, consectetur ac odio.
                  </p>
                  <p>
                    In pharetra quam vel lobortis fermentum. Nulla vel risus ut sapien porttitor volutpat eu ac lorem. Vestibulum porta elit magna, ut ultrices sem fermentum ut. Vestibulum blandit eros ut imperdiet porttitor. Pellentesque tempus nunc sed augue auctor eleifend. Sed nisi sem, lobortis eget faucibus placerat, hendrerit vitae elit. Vestibulum elit orci, pretium vel libero at, imperdiet congue lectus. Praesent rutrum id turpis non aliquam. Cras dignissim, metus vitae aliquam faucibus, elit augue dignissim nulla, bibendum consectetur leo libero a tortor. Vestibulum non tincidunt nibh. Ut imperdiet elit vel vehicula ultricies. Nulla maximus justo sit amet fringilla laoreet. Aliquam malesuada diam in augue mattis aliquam. Pellentesque id eros dignissim, dapibus sem ac, molestie dolor. Mauris purus lacus, tempor sit amet vestibulum vitae, ultrices eu urna.
                  </p>
                </div>
              </div>
            </section>
          </div>

        </div>
        <footer>
          <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
              <p>2023 &copy; Mazer</p>
            </div>
            <div class="float-end">
              <p>Crafted with <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span>
                by <a href="https://saugi.me">Saugi</a></p>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script src="{{ asset('storage/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    <script src="{{ asset('storage/assets/compiled/js/app.js') }}"></script>

  </body>

</html>
