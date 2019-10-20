var handleDateRangePicker = function() {
    $('#filter-date').daterangepicker({
        format: 'MM/DD/YYYY',
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/2012',
        maxDate: Date.now(),
        dateLimit: { days: 60 },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'right',
        drops: 'down',
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-primary',
        cancelClass: 'btn-default',
        separator: ' to ',
        autoUpdateInput: false,
        locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Clear',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
        }
    });
};

var handleIonRangeSlider = function() {
    $('#filter-amount').ionRangeSlider({ // TODO : Dynamiser
        min: 0,
        max: 100,
        from: 0,
        to: 1000,
        type: 'double',
        step: 5,
        hasGrid: true
    });
}

var handleSelectTagAutocomplete = function() {
    $("#filter-categories").select2({ placeholder: "Select a category" });
}

var FormPlugins = function () {
    "use strict";
    return {
        init: function () {
            handleDateRangePicker();
            handleIonRangeSlider();
            handleSelectTagAutocomplete();
        }
    };
}();