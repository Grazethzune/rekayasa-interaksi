<template>
  <Teleport to="body">
    <div class="modal-root">
      <div class="overlay"></div>

      <div class="modal-card" role="dialog" aria-modal="true">
        <div class="icon-wrap">
          <div class="icon-wrapper-success">
            <div class="icon-wrapper-2-success">
              <div class="icon-success"></div>
            </div>
          </div>
        </div>

        <h2 class="title">Berhasil</h2>
        <p class="subtitle">
          {{ message || "Profil berhasil diperbarui" }}
        </p>

        <div class="actions">
          <button class="btn primary" @click="$emit('close')">OK</button>
        </div>
      </div>
    </div>
  </Teleport>
</template>

<script setup>
defineProps({
  message: {
    type: String,
    default: "",
  },
});
defineEmits(["close"]);
</script>

<style media="screen">
.modal-root {
position: fixed;
inset: 0;
z-index: 9999; /* PALING ATAS */
display: flex;
align-items: center;
justify-content: center;
}

.overlay {
position: absolute;
inset: 0;
background: rgba(0, 0, 0, 0.4);
backdrop-filter: blur(6px);
}

.modal-card {
position: relative;
z-index: 1;
width: min(380px, 92%);
background: white;
border-radius: 18px;
padding: 24px;
text-align: center;
box-shadow: 0 20px 40px rgba(0, 0, 0, 0.35);
animation: scaleIn 0.25s ease-out;
}

@keyframes scaleIn {
from {
  opacity: 0;
  transform: scale(0.95);
}
to {
  opacity: 1;
  transform: scale(1);
}
}

</style>
