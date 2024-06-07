
function getNumberOfUnreadNotifications() {

    var notification_link = document.getElementById('notifications-link');
    var numberOfNotifications = notification_link.children[0];
    var number = numberOfNotifications.children[0];

    (async () => {
        userId = await getUserId();
        var xhr = new XMLHttpRequest();
        var url = `NotificationsDb.php?userId=${userId}`;
        xhr.open('GET', url, true);
        xhr.onreadystatechange = function () {
        if(xhr.readyState == 4) {
          if(xhr.status == 200) {
            var json = JSON.parse(xhr.responseText);
            numberOfNotifications.classList.add('number-of-notifications');
            number.innerHTML = json.length;
          }
        }
      }
      xhr.send();
    })()

   
  }