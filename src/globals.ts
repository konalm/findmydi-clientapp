let apiUrl = '';
let instructorAppUrl = '';

switch (window.location.hostname) {
  case 'localhost':
    apiUrl = 'http://localhost:8181/';
    instructorAppUrl = 'http://localhost:4000';
    break;
  case 'staging.findmydi.com':
    apiUrl = 'http://staging.api.findmydi.com';
    instructorAppUrl = 'http://staging.app.findmydi.com';
    break;
  case 'findmydi.com':
    apiUrl = 'http://api.findmydi.com';
    instructorAppUrl = 'http://app.findmydi.com';
}

/**
 * return the api url 
 */
export const getApiUrl = function () {
  return apiUrl
}

/**
 * return the instructor app url
 */
export const getInstructorAppUrl = function () {
  return instructorAppUrl
}

