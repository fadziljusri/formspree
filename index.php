<style>
input[type=text],[type=email], select {
    width: 100%;
    padding: 10px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

textarea, select {
    width: 100%;
    padding: 10px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    width: 40%;
    text-align: left;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>

<div>

<!--Change your form's action-replace your@email.com with your own email.-->

<form action="https://formspree.io/coprestocl@thraml.com" method="POST">
    Name <input type="text" name="Name">
    From <input type="email" name="_replyto">
    Message <input type="text" name="Message">
    <input type="submit" value="Send">
    <input type="hidden" name="_subject" value="New submission!" />
    <!--<input type="hidden" name="_next" value="//site.io/thanks.html" />-->
</form>
</div>