document.addEventListener('DOMContentLoaded', function () {
    const programSelect = document.getElementById('programSelect');
    const certificationOptions = document.getElementById('certificationOptions');
    const bachelorsOptions = document.getElementById('bachelorsOptions');
    const bThOptions = document.getElementById('bThOptions');
    const bachelorSelect = document.getElementById('bachelorSelect');

    programSelect.addEventListener('change', function () {
        // Hide all sub-options initially
        certificationOptions.style.display = 'none';
        bachelorsOptions.style.display = 'none';
        bThOptions.style.display = 'none';

        if (programSelect.value === 'Certification') {
            certificationOptions.style.display = 'block';
        } else if (programSelect.value === 'Bachelors') {
            bachelorsOptions.style.display = 'block';
        }
    });

    bachelorSelect.addEventListener('change', function () {
        // Show further options for Bachelor of Theology only
        bThOptions.style.display = bachelorSelect.value === 'BTh' ? 'block' : 'none';
    });
});
