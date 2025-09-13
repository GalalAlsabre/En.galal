// /assets/js/modals.js

document.addEventListener('DOMContentLoaded', () => {
  try {
    MicroModal.init({
      awaitCloseAnimation: true, // Optional: useful for animations
      disableScroll: true // Prevent background scrolling when modal is open
    });
  } catch (e) {
    console.error("MicroModal not found or failed to initialize:", e);
  }
});