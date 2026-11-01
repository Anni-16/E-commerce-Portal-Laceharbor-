    <footer class="zentic-footer">
        <span>
            &copy; <span id="currentYear"></span>
            <strong>LaceHarbor</strong>. All rights reserved.
        </span>
        <script>
            document.getElementById("currentYear").textContent = new Date().getFullYear();
        </script>
    </footer>

    <button class="back-to-top visible" id="backToTop" aria-label="Back to top">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
            stroke-linejoin="round">
            <polyline points="18 15 12 9 6 15"></polyline>
        </svg>
    </button>