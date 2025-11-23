<template>
  <div class="page">
    <div class="page-inner">
      <h1 class="title">Pemrograman KRS</h1>

      <!-- INFO MAHASISWA -->
      <div class="info-container">
        <div class="info">
          <p class="info-label">NIM</p>
          <p class="info-value">202210370311272</p>
        </div>
        <div class="info">
          <p class="info-label">Nama</p>
          <p class="info-value">Gemilang Rizmart Samopdra</p>
        </div>
        <div class="info">
          <p class="info-label">Tahun Akademik</p>
          <p class="info-value">2025/2026</p>
        </div>
        <div class="info">
          <p class="info-label">Semester</p>
          <p class="info-value">Ganjil</p>
        </div>
      </div>

      <!-- ALERT KUNING DI ATAS -->
      <div class="alert alert-warning">
        <div class="alert-header">
          <div class="icon-wrap">
            <div class="icon-wrapper-alert">
              <div class="icon-wrapper-2-alert">
                <div class="icon-alert"></div>
              </div>
            </div>
          </div>
          <div class="content">
            <span class="alert-title">Jadwal Kelas Belum Tersedia</span>
            <p class="alert-desc">
              Saat ini jadwal dari fakultas belum diunggah. Silakan cek kembali
              setelah tanggal 20 Oktober 2025 atau hubungi admin program studi
              jika masalah berlanjut.
            </p>
          </div>
        </div>
      </div>

      <!-- LIST MATA KULIAH (ACCORDION) -->
      <div
        v-for="(mk, index) in matkulList"
        :key="mk.id"
        class="course-card"
      >
        <!-- HEADER BISA DIKLIK -->
        <button class="course-header" @click="toggleMatkul(index)">
          <span class="course-title">
            {{ mk.nama }} | Semester {{ mk.semester }} ({{ mk.sks }} SKS)
          </span>
          <span class="course-arrow" :class="{ open: mk.isOpen }">⌃</span>
        </button>

        <!-- BODY: TABLE BISA DI-SCROLL -->
        <transition name="accordion">
          <div v-if="mk.isOpen" class="course-body">
            <div class="course-body-scroll">
              <table class="krs-table">
                <thead>
                  <tr>
                    <th>Kelas</th>
                    <th>Jadwal</th>
                    <th>Nilai</th>
                    <th>Kuota</th>
                    <th>Terisi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(row, i) in mk.kelas" :key="i">
                    <td>{{ row.kelas }}</td>
                    <td>{{ row.jadwal }}</td>
                    <td>{{ row.nilai || "-" }}</td>
                    <td>{{ row.kuota }}</td>
                    <td>{{ row.terisi }}</td>
                    <td>
                      <button
                        v-if="!row.full"
                        class="btn-pilih"
                        @click="pilihKelas(mk, row)"
                      >
                        Pilih
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </transition>
      </div>
    </div>

    <JadwalKelasBelumTersedia
      v-if="showJadwalModal"
      @close="showJadwalModal = false"
    />
  </div>
</template>

<script setup>
import { ref } from "vue";
import JadwalKelasBelumTersedia from "../../components/KRSUnavailable.vue";

const showJadwalModal = ref(false);
const selectedMatkul = ref(null);
const selectedKelas = ref(null);

const matkulList = ref([
  {
    id: 1,
    nama: "Rekayasa Ulang Sistem",
    semester: 7,
    sks: 4,
    isOpen: true,
    kelas: [
      { kelas: "A", jadwal: "Senin (3,4)", nilai: "", kuota: 50, terisi: 50, full: true },
      { kelas: "B", jadwal: "Selasa (1,2)", nilai: "", kuota: 50, terisi: 50, full: true },
      { kelas: "C", jadwal: "-", nilai: "", kuota: 50, terisi: 0, full: false },
      { kelas: "D", jadwal: "-", nilai: "", kuota: 50, terisi: 0, full: false },
    ],
  },
  {
    id: 2,
    nama: "Rekayasa Interaksi",
    semester: 7,
    sks: 3,
    isOpen: false,
    kelas: [
      { kelas: "A", jadwal: "Senin (7,8,9)", nilai: "", kuota: 50, terisi: 50, full: true },
      { kelas: "B", jadwal: "-", nilai: "", kuota: 50, terisi: 0, full: false },
      { kelas: "C", jadwal: "-", nilai: "", kuota: 50, terisi: 0, full: false },
      { kelas: "D", jadwal: "-", nilai: "", kuota: 50, terisi: 0, full: false },
    ],
  },
  {
    id: 3,
    nama: "Penjaminan Kualitas Perangkat Lunak",
    semester: 7,
    sks: 3,
    isOpen: false,
    kelas: [
      { kelas: "A", jadwal: "Selasa (5,6)", nilai: "", kuota: 50, terisi: 50, full: true },
      { kelas: "B", jadwal: "Kamis (1,2)", nilai: "", kuota: 50, terisi: 50, full: true },
      { kelas: "C", jadwal: "-", nilai: "", kuota: 50, terisi: 0, full: false },
      { kelas: "D", jadwal: "-", nilai: "", kuota: 50, terisi: 0, full: false },
    ],
  },
  {
    id: 4,
    nama: "Keamanan Jaringan",
    semester: 7,
    sks: 3,
    isOpen: false,
    kelas: [
      { kelas: "A", jadwal: "Rabu (3,4)", nilai: "", kuota: 40, terisi: 40, full: true },
      { kelas: "B", jadwal: "", nilai: "", kuota: 40, terisi: 0, full: false },
      { kelas: "C", jadwal: "-", nilai: "", kuota: 40, terisi: 0, full: false },
      { kelas: "D", jadwal: "-", nilai: "", kuota: 40, terisi: 0, full: false },
    ],
  },
  {
    id: 5,
    nama: "Rekayasa Perangkat Lunak",
    semester: 5,
    sks: 2,
    isOpen: false,
    kelas: [
      { kelas: "A", jadwal: "Senin (1,2)", nilai: "", kuota: 35, terisi: 35, full: true },
      { kelas: "B", jadwal: "", nilai: "", kuota: 35, terisi: 0, full: false },
      { kelas: "C", jadwal: "-", nilai: "", kuota: 35, terisi: 0, full: false },
      { kelas: "D", jadwal: "-", nilai: "", kuota: 35, terisi: 0, full: false },
    ],
  },
]);

function toggleMatkul(index) {
  matkulList.value[index].isOpen = !matkulList.value[index].isOpen;
}

function pilihKelas(mk, row) {
  selectedMatkul.value = mk;
  selectedKelas.value = row;
  showJadwalModal.value = true;
}
</script>

<style scoped>
.page {
  min-height: 100vh;
  display: flex;
  justify-content: center;
  padding: 24px 16px 40px;
  box-sizing: border-box;
}

.page-inner {
  width: 100%;
  max-width: 430px;
}

@media (min-width: 768px) {
  .page-inner {
    max-width: 1200px;
  }
}

.title {
  font-size: 28px;
  font-weight: 700;
  color: #555;
  margin-bottom: 24px;
}

.info-container {
  display: flex;
  flex-direction: column;
  gap: 8px;
  margin-bottom: 24px;
}

.info-label {
  font-size: 13px;
  color: #6b7280;
  margin: 0;
}

.info-value {
  font-size: 14px;
  color: #111827;
  margin: 0;
}

.alert {
  padding: 16px 18px;
  border-radius: 18px;
  margin-top: 16px;
  text-align: center;
  border: none;
}

.alert-warning {
  background: #fee9a6;
  color: #4f3b00;
}

.alert-header {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 10px;
}

.content {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.alert-title {
  font-weight: 700;
  font-size: 15px;
}

.alert-desc {
  font-size: 13px;
  margin: 4px 0 0 0;
}

.icon-wrap {
  display: flex;
  justify-content: center;
  align-items: center;
}

.icon-wrapper-alert {
  width: 52px;
  height: 52px;
  border-radius: 999px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #fffaeb;
}

.icon-wrapper-2-alert {
  width: 70%;
  height: 70%;
  border-radius: 999px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #fef0c7;
}

.icon-alert {
  width: 50%;
  height: 50%;
  background-image: url("../../assets/alert-triangle.svg");
  background-size: cover;
  background-position: center;
}

.course-card {
  margin-top: 18px;
  border-radius: 25px;
  background: #ffffff;
  box-shadow: 0px 6px 20px rgba(15, 23, 42, 0.08);
  overflow: hidden;
}

.course-header {
  width: 100%;
  border: none;
  outline: none;
  padding: 10px 14px;
  background: #b7d36b;
  display: flex;
  justify-content: space-between;
  align-items: center;
  cursor: pointer;
}

.course-title {
  font-size: 13px;
  font-weight: 600;
  color: #111827;
  text-align: left;
}

.course-arrow {
  font-size: 14px;
  transition: transform 0.2s ease;
  display: inline-block;
  transform: rotate(180deg);
}

.course-arrow.open {
  transform: rotate(0deg);
}

.course-body {
  padding: 0;
}

.course-body-scroll {
  width: 100%;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}

.krs-table {
  width: 100%;
  border-collapse: collapse;
  font-size: 13px;
  min-width: 600px;
}

@media (min-width: 768px) {
  .course-body-scroll {
    overflow-x: visible;
  }

  .krs-table {
    min-width: 100%;
  }
}

.krs-table th,
.krs-table td {
  padding: 10px 12px;
  border-bottom: 1px solid #f1f5f9;
  text-align: left;
}

.krs-table th {
  background: #f9fafb;
  font-weight: 600;
  color: #6b7280;
  font-size: 12px;
}

.krs-table tr:last-child td {
  border-bottom: none;
}

.krs-table tr:hover {
  background: #f9fafb;
}

.btn-pilih {
  padding: 6px 12px;
  border-radius: 999px;
  border: 1px solid #e5e7eb;
  background: #2CC3FF;
  color: #fff;
  font-size: 12px;
  cursor: pointer;
  white-space: nowrap;
}

</style>
