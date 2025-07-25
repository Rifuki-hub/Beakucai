document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll("form[data-confirm='true']").forEach(form => {
    form.addEventListener("submit", async (e) => {
      e.preventDefault();

      const confirmMessage = form.getAttribute("data-confirm-message") || "Apakah Anda yakin ingin mengirim formulir ini?";
      if (!confirm(confirmMessage)) return;

      const delay = parseInt(form.getAttribute("data-submit-delay")) || 1000;
      const successMessage = form.getAttribute("data-success-message") || "Formulir berhasil dikirim!";

      const submitButtons = form.querySelectorAll("button[type='submit'], input[type='submit']");
      submitButtons.forEach(btn => {
        btn.disabled = true;
        btn.dataset.originalText = btn.textContent || btn.value;
        if (btn.tagName === "BUTTON") btn.textContent = "Mengirim...";
        else btn.value = "Mengirim...";
      });

      await new Promise(resolve => setTimeout(resolve, delay));

      alert(successMessage);

      form.reset();
      submitButtons.forEach(btn => {
        btn.disabled = false;
        if (btn.tagName === "BUTTON") btn.textContent = btn.dataset.originalText;
        else btn.value = btn.dataset.originalText;
      });
    });
  });
});
