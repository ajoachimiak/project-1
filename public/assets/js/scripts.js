$(function () {
    $('.datepicker, .input-daterange').datepicker({
        format: 'yyyy-mm-dd',
        language: 'pl',
        todayHighlight: true,
        todayBtn: 'linked',
        daysOfWeekDisabled: [0, 6],
    });
});