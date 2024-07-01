window.onload = function() {
    if (window.history.state !== null && window.history.state.url === '/logout') {
        // Clear the history state to prevent going back to the logout URL
        history.pushState(null, '', '/');
    }
};

window.onpopstate = function(event) {
    // Redirect to the main page if history state points to logout
    if (event.state !== null && event.state.url === '/logout') {
        window.location.href = '/';
    }
};

