
function showPosts(responseText) {
    let svgTemplate = document.getElementById('svg-template');
    const tweetsContainer = document.getElementById('tweets');
    let result = JSON.parse(responseText);

    result.forEach(async (tweet) => {

      let postContainer = document.createElement('div');
        postContainer.classList.add('container-fluid', 'postContainer', 'border-bottom');
        postContainer.setAttribute('id', `tweet-${tweet.id}`);
        tweetsContainer.append(postContainer);
        let form = document.createElement('form');
        form.classList.add('post', 'p-4', 'd-flex', 'gap-2');
        postContainer.appendChild(form);
        let bg_profile = document.createElement('div');
        bg_profile.classList.add('background-profile');
        form.appendChild(bg_profile);
        let img = document.createElement('img');
        img.classList.add('h-100');
        img.src = 'img/new-twitter-logo-x-2023-twitter-x-logo-official-vector-download_691560-10797.avif';
        bg_profile.appendChild(img);

        let postAndInfo = document.createElement('div');
        postAndInfo.classList.add('postAndInfo', 'text-wrap');
        form.appendChild(postAndInfo);
        let userInfo = document.createElement('div');
        userInfo.classList.add('userInfo', 'd-flex', 'gap-1')
        postAndInfo.appendChild(userInfo);
        let b_paragraph = document.createElement('p');
        b_paragraph.classList.add('fw-bold');
        b_paragraph.textContent = tweet.userInfo.firstname + " " + tweet.userInfo.lastname;
        userInfo.appendChild(b_paragraph);
        let username = document.createElement('p');
        username.setAttribute('id', 'u_name');
        username.textContent = '@' + tweet.userInfo.username;
        userInfo.appendChild(username);
        let date = document.createElement('p');
        date.setAttribute('id', 'u_name');
        date.textContent = '23 May';
        userInfo.appendChild(date);

        // post content

        let content = document.createElement('p');
        content.classList.add('content');
        content.textContent = tweet.tweetText;
        postAndInfo.appendChild(content);

        let replyRetweet = document.createElement('div');
        replyRetweet.classList.add('replyRetweet', 'd-flex', 'gap-5');
        postAndInfo.appendChild(replyRetweet);
        
        let reply = document.createElement('div');
        reply.classList.add('d-flex', 'gap-1', 'align-content-center');
        let replyButton = document.createElement('button');
        replyButton.classList.add('replyButton');
        let reply_svg = svgTemplate.firstElementChild.cloneNode(true);

        replyButton.appendChild(reply_svg);
        reply.appendChild(replyButton);
        replyRetweet.appendChild(reply);
      
        let reply_paragraph = document.createElement('p');
        reply_paragraph.setAttribute('id', 'noOfPosts');
        reply_paragraph.classList.add('mb-0', 'align-self-center');
        reply_paragraph.textContent = "11K";

        reply.appendChild(reply_paragraph);

        let retweet = document.createElement('div');
        retweet.classList.add('d-flex', 'gap-1');
        let retweetButton = document.createElement('button');
        retweetButton.classList.add('retweetButton');
        let retweet_svg = svgTemplate.children[1].cloneNode(true);

        retweetButton.appendChild(retweet_svg);
        retweet.appendChild(retweetButton);

        let retweet_paragraph = document.createElement('p');
        retweet_paragraph.setAttribute('id', 'noOfPosts');
        retweet_paragraph.classList.add('mb-0', 'align-self-center');
        retweet_paragraph.textContent = "11K";

        retweet.appendChild(retweet_paragraph);
        replyRetweet.appendChild(retweet);


        let like = document.createElement('div');
        like.classList.add('d-flex', 'gap-1');
        let likeButton = document.createElement('button');
        likeButton.classList.add('likeButton');
        let like_svg = svgTemplate.children[2].cloneNode(true);

        likeButton.appendChild(like_svg);
        like.appendChild(likeButton);

        let like_paragraph = document.createElement('p');
        like_paragraph.setAttribute('id', 'noOfPosts');
        like_paragraph.classList.add('mb-0', 'align-self-center');
        like_paragraph.textContent = tweet.likes;

        like.appendChild(like_paragraph);
        replyRetweet.appendChild(like);

      postAndInfo.appendChild(replyRetweet);


    });


}
