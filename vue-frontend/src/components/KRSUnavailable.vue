<template>
  <div class="modal-page">
    <div class="overlay" @click="close"></div>

    <div class="modal-card">
      <div class="icon-wrap">
        <div class="icon-wrapper-alert">
          <div class="icon-wrapper-2-alert">
            <div class="icon-alert"></div>
          </div>
        </div>
      </div>

      <h2 class="title">{{ title }}</h2>
      <p class="subtitle">{{ subtitle }}</p>

      <button class="btn-close" @click="close">Tutup</button>
    </div>
  </div>
</template>

<script setup>
const emit = defineEmits(["close"]);

const props = defineProps({
  title: {
    type: String,
    default: "KRS Belum Tersedia",
  },
  subtitle: {
    type: String,
    default:
      "Saat ini jadwal KRS dari fakultas belum diunggah. Silakan cek kembali setelah tanggal 20 Oktober 2025 atau hubungi admin program studi jika masalah berlanjut.",
  },
});

const close = () => emit("close");
</script>

<style scoped>
.modal-page {
  position: fixed;
  inset: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 3000;
  font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont, sans-serif;
}

.overlay {
  position: absolute;
  inset: 0;
  background: rgba(15, 23, 42, 0.6);
  backdrop-filter: blur(6px);
  z-index: 1;
}

.modal-card {
  position: relative;
  z-index: 2;
  width: min(360px, 92%);
  background: #ffffff;
  border-radius: 18px;
  padding: 24px 20px 20px;
  box-shadow: 0 18px 38px rgba(15, 23, 42, 0.45);
  text-align: center;
}

.icon-wrap {
  display: flex;
  justify-content: center;
  margin-bottom: 12px;
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
  background-image: url("../assets/alert-triangle.svg");
  background-size: cover;
  background-position: center;
}

.title {
  margin: 4px 0 8px 0;
  font-size: 18px;
  font-weight: 700;
  color: #111827;
}

.subtitle {
  margin: 0 0 16px 0;
  font-size: 13px;
  line-height: 1.5;
  color: #4b5563;
}

.btn-close {
  display: inline-flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  max-width: 260px;
  padding: 10px 16px;
  margin: 0 auto;
  border-radius: 999px;
  border: 1px solid #e5e7eb;
  background: #f9fafb;
  font-size: 14px;
  font-weight: 600;
  color: #111827;
  cursor: pointer;
}

.btn-close:active {
  transform: scale(0.98);
}
</style>
