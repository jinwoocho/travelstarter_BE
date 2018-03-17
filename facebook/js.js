var requestUri = new Windows.Foundation.Uri("https://www.facebook.com/v2.9/dialog/oauth?client_id={app-id}&display=popup&response_type=token &redirect_uri=ms-app://{package-security-identifier}");

Windows.Security.Authentication.Web.WebAuthenticationBroker.authenticateAsync(
    options,
    requestUri)
    .done(function (result) {
            // Handle the response from the Login Dialog
        }
    );