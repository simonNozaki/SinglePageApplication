<template>
<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #2c3e50;">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <router-link to="/new">Register Bands</router-link>
      </li>
      <li class="nav-item dropdown">
        <router-link to="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu
        </router-link>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><router-link to="/new" class="dropdown-item">Register</router-link></li>
          <div class="dropdown-divider"></div>
          <li><router-link to="/about" class="dropdown-item">About</router-link></li>
        </div>
      </li>
    </ul>
  </div>

</nav>
</div>
</template>
