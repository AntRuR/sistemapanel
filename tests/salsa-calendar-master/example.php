<!DOCTYPE html>
<html>
<head>
  <title>SalsaCalendar</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="../../wpkmanager/panel/js/babel/vendor/salsa/js/SalsaCalendar.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../../wpkmanager/panel/js/babel/vendor/salsa/css/SalsaCalendar.min.css" media="all" />
</head>
<body>

<div>
  <div class="date">
    Arrival date

    <input type="text"
           id="checkin"
           class="salsa-calendar-input"
           autocomplete="off"
           name="arrival"
           value=""
    />
  </div>

  <div class="date">
    Departure date

    <span id="nights-no">
      (
      <span class="counter"></span>
      <span class="singular" style="display:none;">día</span>
      <span class="plural" style="display:none;">días</span>
      )
    </span>

    <input type="text"
           id="checkout"
           class="salsa-calendar-input"
           autocomplete="off"
           name="departure"
           value=""
    />
  </div>
</div>

<script type="text/javascript">
  var calendar_from = new SalsaCalendar({
    inputId: 'checkin',
    lang: 'en',
    range: {
      min: 'today'
    },
    calendarPosition: 'right',
    fixed: false,
    connectCalendar: true
  });

  var calendar_to = new SalsaCalendar({
    inputId: 'checkout',
    lang: 'en',
    range: {
      min: 'today'
    },
    calendarPosition: 'right',
    fixed: false
  });

  new SalsaCalendar.Connector({
    from: calendar_from,
    to: calendar_to,
    maximumInterval: 21,
    minimumInterval: 1
  });

  new SalsaCalendar.NightsCalculator({
    from: calendar_from,
    to: calendar_to,
    nightsNo: 'nights-no'
  });
</script>

</body>
</html>