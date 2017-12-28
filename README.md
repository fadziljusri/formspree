# learn-formspree
Email for static sites. 

Functional HTML forms. Hosted at [https://formspree.io](https://formspree.io).

## 1. Setup the HTML form

Change your form's action-attribute to this and replace your@email.com with your own email.

```html
<form action="https://formspree.io/you@email.com">
    <input type="text" name="name">
    <input type="email" name="_replyto">
    <input type="submit" value="Send">
</form>
```

## 2. Submit the form and confirm your email address

Go to your website and submit the form once. This will send you an email asking to confirm your email address, so that no one can start sending you spam from random websites.

## 3. All set, receive emails

From now on, when someone submits that form, it will forward you the data as email.


### [LEARN MORE](https://github.com/formspree/formspree)
