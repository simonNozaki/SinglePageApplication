<template>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #2c3e50;">
  <router-link to="/" class="navbar-brand">Bands Database</router-link>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <router-link to="#" class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu
        </router-link>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><router-link to="/new" class="dropdown-item">Register</router-link></li>
          <li><router-link to="/about" class="dropdown-item">About</router-link></li>
        </div>
      </li>
    </ul>
  </div>
</nav>
</template>
