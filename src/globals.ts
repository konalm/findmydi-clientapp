let apiUrl = '';


switch (window.location.hostname) {
  case 'localhost':
    apiUrl = 'http://localhost:8181/';
    break;
  case 'staging.findmydi.com':
    apiUrl = 'http://staging.api.findmydi.com';
    break;
}

/**
 * return the api url 
 */
export const getApiUrl = function () {
  return apiUrl
}

