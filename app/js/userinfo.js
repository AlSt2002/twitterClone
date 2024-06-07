function userInfo() {

    return new Promise((resolve, reject) => {
    var  url = "UserInfo.php";
    var xhr = new XMLHttpRequest();
      
      xhr.open('GET', url, true);
      xhr.onreadystatechange = function () {
        if(xhr.readyState == 4) {
            if(xhr.status == 200) {
              resolve(xhr.responseText);
            }
            else {
              reject("Error getting Id");
            }
       
        }
      }

      xhr.send();
    })
   
  }

  async function getUserId() {
    user_id = await userInfo();
    return user_id;
  }
