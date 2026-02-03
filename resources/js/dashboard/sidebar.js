document.addEventListener('DOMContentLoaded', () => {
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('toggleSidebar');
    const arrowIcon = document.getElementById('arrowIcon');
    const texts = document.querySelectorAll('.sidebar-text');

    let isOpen = true;

    toggleBtn.addEventListener('click', () => {
        isOpen = !isOpen;

        sidebar.classList.toggle('w-[80px]');
        sidebar.classList.toggle('w-[260px]');

        arrowIcon.classList.toggle('fa-chevron-left');
        arrowIcon.classList.toggle('fa-chevron-right');

        texts.forEach(text => {
            text.classList.toggle('hidden');
        });
    });
});
const sidebar = document.getElementById('sidebar');
const toggleBtn = document.getElementById('toggleSidebar');
const arrowIcon = document.getElementById('arrowIcon');
const texts = document.querySelectorAll('.sidebar-text');

let open = true;

toggleBtn.addEventListener('click', () => {
    open = !open;

    sidebar.classList.toggle('w-[260px]');
    sidebar.classList.toggle('w-[80px]');
    arrowIcon.classList.toggle('rotate-180');

    texts.forEach(t => t.classList.toggle('hidden'));
});
