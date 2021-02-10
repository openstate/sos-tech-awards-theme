import Add2Calendar from 'add2calendar';

export default {
  init() {
    // JavaScript to be fired on the home page
    var singleEventArgs = {
      title       : 'SETUP & Open State Tech Awards',
      start       : 'March 23, 2021',
      end         : 'March 24, 2021',
      location    : 'https://sostechawards.nl/',
      description : '4 Awards voor Transparantie & Verantwoordelijkheid in de Digitale Samenleving',
      isAllDay    : true,
    };
    var singleEvent = new Add2Calendar(singleEventArgs);

    // to get actual url
    $('#cal-ics').attr('href', singleEvent.getICalUrl()); // data:text/calendar;charset=utf8,BEGIN:VCALENDAR%0A...
    $('#cal-google').attr('href', singleEvent.getGoogleUrl()); // https://www.google.com/calendar/render?action=TEMPLATE&text=...
    $('#cal-outlook').attr('href', singleEvent.getOutlookUrl()); // data:text/calendar;charset=utf8,BEGIN:VCALENDAR%0A...
    $('#cal-yahoo').attr('href', singleEvent.getYahooUrl()); // https://calendar.yahoo.com/?v=60&view=d&type=20&title=...
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
