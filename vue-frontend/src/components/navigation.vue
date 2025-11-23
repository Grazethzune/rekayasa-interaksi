<template>
  <div class="container">
    <!-- Sidebar -->
    <aside :class="['sidebar', { open: isSidebarOpen }]">
      <div class="logo">
        <img src="" alt="UMM Logo" />
      </div>

      <ul class="menu">
        <li><span class="icon">👤</span> Profil</li>
        <li><span class="icon">📑</span> Hasil Studi</li>
        <li><span class="icon">✏️</span> KRS</li>
        <li><span class="icon">📋</span> Jadwal Kuliah</li>
        <li><span class="icon">💰</span> Keuangan</li>
        <li><span class="icon">🛠️</span> Layanan Mandiri</li>
      </ul>
    </aside>

    <!-- Main Content -->
    <main>
      <!-- Header -->
      <header class="header">
        <button class="menu-toggle" @click="toggleSidebar">☰</button>

        <div class="account" @click="toggleDropdown">
          <span>Account</span>
          <span class="arrow" :class="{ rotate: dropdownOpen }">▼</span>

          <ul v-if="dropdownOpen" class="dropdown">
            <li @click="viewProfile">View Profile</li>
            <li @click="logout">Logout</li>
          </ul>
        </div>
      </header>

      <div class="content">
        <h2>Halaman Konten</h2>
      </div>
    </main>
  </div>
</template>

<script setup>
import { ref } from "vue";

const isSidebarOpen = ref(true);
const dropdownOpen = ref(false);

function toggleSidebar() {
  isSidebarOpen.value = !isSidebarOpen.value;
}

function toggleDropdown() {
  dropdownOpen.value = !dropdownOpen.value;
}

function viewProfile() {
  alert("Menuju Profil...");
}

function logout() {
  alert("Logout Berhasil");
}
</script>

<style scoped>
/* Layout */
.container {
  display: flex;
  height: 100vh;
  background: #fff;
}

/* Sidebar */
.sidebar {
  width: 230px;
  background: #253953;
  color: white;
  padding: 20px 10px;
  position: fixed;
  left: -230px;
  top: 0;
  bottom: 0;
  transition: 0.3s;
}

.sidebar.open {
  left: 0;
}

/* Logo */
.logo img {
  width: 80%;
  margin-bottom: 30px;
}

/* Menu */
.menu {
  list-style: none;
  padding: 0;
}
.menu li {
  padding: 18px 10px;
  display: flex;
  align-items: center;
  gap: 12px;
  cursor: pointer;
  font-size: 15px;
}
.menu li:hover {
  background: #1c2d44;
  border-radius: 8px;
}

/* Main Content */
main {
  margin-left: 230px;
  width: 100%;
  transition: 0.3s;
}
.sidebar:not(.open) + main {
  margin-left: 0;
}

/* Header */
.header {
  height: 60px;
  background: #f8f8f8;
  display: flex;
  align-items: center;
  justify-content: flex-end;
  padding: 0 20px;
  position: relative;
}

.menu-toggle {
  position: absolute;
  left: 20px;
  border: none;
  background: transparent;
  font-size: 24px;
  cursor: pointer;
}

/* Account Dropdown */
.account {
  font-size: 16px;
  cursor: pointer;
  position: relative;
  user-select: none;
}

.account .arrow {
  margin-left: 6px;
  transition: 0.3s;
}
.arrow.rotate {
  transform: rotate(180deg);
}

.dropdown {
  position: absolute;
  right: 0;
  top: 35px;
  width: 140px;
  background: white;
  border-radius: 8px;
  list-style: none;
  padding: 5px 0;
  box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.15);
}

.dropdown li {
  padding: 10px;
  cursor: pointer;
  text-align: left;
}
.dropdown li:hover {
  background: #eee;
}

/* Page content */
.content {
  padding: 20px;
}
</style>
