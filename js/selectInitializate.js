
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
});

var options = {
    maintainAspectRatio: true,
    spanGaps: false,
    elements: {
        line: {
            tension: 0.01
        }
    }
};