 <div id="sidebar">
   <div class="sidebar-wrapper active">
     <div class="sidebar-header position-relative">
       <div class="d-flex justify-content-between align-items-center">
         <div class="logo fs-3">
           <a href="{{ route('dashboard') }}">Agatha Inventory</a>
         </div>
       </div>
     </div>
     <div class="sidebar-menu">
       <ul class="menu">
         <li class="sidebar-item">
           <a wire:navigate class='sidebar-link' href="{{ route('dashboard') }}">
             <i class="bi bi-grid"></i>
             <span>Dashboard</span>
           </a>
         </li>

         <li class="sidebar-item">
           <a class='sidebar-link' href="#">
             <i class="bi bi-graph-up"></i>
             <span>Trend Analysis</span>
           </a>
         </li>

         <li class="sidebar-item has-sub">
           <a class='sidebar-link' href="#">
             <i class="bi bi-cake2"></i>
             <span>Manage Product</span>
           </a>

           <ul class="submenu">
             <li class="submenu-item">
               <a class="submenu-link" href="#">Product List</a>
             </li>
             <li class="submenu-item">
               <a class="submenu-link" href="#">Barcode Scanner</a>
             </li>
           </ul>
         </li>

         <li class="sidebar-item has-sub">
           <a class='sidebar-link' href="#">
             <i class="bi bi-cake"></i>
             <span>Manage Production</span>
           </a>

           <ul class="submenu">
             <li class="submenu-item">
               <a class="submenu-link" href="#">Production List</a>
             </li>
             <li class="submenu-item">
               <a class="submenu-link" href="#">Production Report</a>
             </li>
           </ul>
         </li>

         <li class="sidebar-item has-sub">
           <a class='sidebar-link' href="#">
             <i class="bi bi-basket"></i>
             <span>Manage Sales</span>
           </a>

           <ul class="submenu">
             <li class="submenu-item">
               <a class="submenu-link" href="#">Sales List</a>
             </li>
             <li class="submenu-item">
               <a class="submenu-link" href="#">Sales Report</a>
             </li>
           </ul>
         </li>

         <li class="sidebar-item has-sub">
           <a class='sidebar-link' href="#">
             <i class="bi bi-box-seam"></i>
             <span>Manage Inventory</span>
           </a>

           <ul class="submenu">
             <li class="submenu-item">
               <a class="submenu-link" href="#">Inventory List</a>
             </li>
             <li class="submenu-item">
               <a class="submenu-link" href="#">Inventory Report</a>
             </li>
           </ul>
         </li>

         <li class="sidebar-item has-sub">
           <a class='sidebar-link' href="#">
             <i class="bi bi-people"></i>
             <span>Manage Access</span>
           </a>

           <ul class="submenu">
             <li class="submenu-item">
               <a wire:navigate class="submenu-link" href="{{ route('user.index') }}">User List</a>
             </li>
             <li class="submenu-item">
               <a class="submenu-link" href="#">Role List</a>
             </li>
             <li class="submenu-item">
               <a class="submenu-link" href="#">Permission List</a>
             </li>
           </ul>
         </li>
       </ul>
     </div>
   </div>
 </div>
