<dialog id="welcomeDialog" class="welcome-dialog" aria-labelledby="welcomeDialogTitle">
      <div class="welcome-dialog-icon" aria-hidden="true">
        <i class="bi bi-eye"></i>
      </div>
      <h2 id="welcomeDialogTitle">Login Is Complete</h2>
      <p>Welcome back to the Tarot Club.</p>
      <button type="button" class="btn btn-relic" id="welcomeDialogButton">Continue</button>
    </dialog>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      const welcomeDialog = document.getElementById('welcomeDialog');
      const welcomeDialogButton = document.getElementById('welcomeDialogButton');

      if (sessionStorage.getItem('loginWelcomePending') === 'true') {
        sessionStorage.removeItem('loginWelcomePending');
        welcomeDialog.showModal();
        welcomeDialogButton.focus();
      }

      welcomeDialogButton.addEventListener('click', function () {
        welcomeDialog.close();
      });
</script>