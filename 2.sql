select user.name, count(post.post_id) cnt from user, post where user.user_id=post.user_id group by user.user_id order by cnt limit 10