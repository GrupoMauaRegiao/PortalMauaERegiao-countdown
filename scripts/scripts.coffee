PortalCountDown   = {}

PortalCountDown.apps =
  # Adds countdown with the difference between Release Day and Today
  countdown: ->
    timer = $ '.countdown'
    currentDate = new Date $('.custom-script').attr 'data-fulldate'
    releaseDateTime  = new Date 2014, 6, 21, 9, 0, 0
    diff = (releaseDateTime.getTime() / 1000) - (currentDate.getTime() / 1000)

    timer.FlipClock(diff, {
      clockFace: 'DailyCounter'
      countdown: true
      language: 'pt-br'
    })

do ->
  PortalCountDown.apps.countdown()
  return
