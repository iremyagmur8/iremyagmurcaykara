function openCalendar() {
$('#modalTakvim').modal();



}

$("#modalTakvim").on('shown.bs.modal', function(e){
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        timeZone: 'UTC',
        locale: 'tr',
        //initialView: 'resourceTimelineDay',
        aspectRatio: 1.5,
        headerToolbar: {
            left: 'prev,next',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        editable: true,
        resourceAreaHeaderContent: 'Rooms',
        //resources: 'https://fullcalendar.io/demo-resources.json?with-nesting&with-colors',
        //events: 'https://fullcalendar.io/demo-events.json?single-day&for-resource-timeline'
    });

    calendar.render();
})

$('.post-item img').each(function(){
    console.log($(this).width());
    $(this).attr('width', $(this).width());
    $(this).attr('height', $(this).height());
});

/*
if(document.querySelector("#img-element").complete) {
    var image_width_actual = document.querySelector("#img-element").naturalWidth;
    var image_height_actual = document.querySelector("#img-element").naturalHeight;

    var image_width_rendered = document.querySelector("#img-element").width;
    var image_height_rendered = document.querySelector("#img-element").height;
}
else {
    document.querySelector("#img-element").addEventListener('load', function() {
        var image_width_actual = this.naturalWidth;
        var image_height_actual = this.naturalHeight;

        var image_width_rendered = this.width;
        var image_height_rendered = this.height;
    });
}
*/


