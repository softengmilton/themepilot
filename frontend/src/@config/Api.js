// src/api/Api.js
import axios from 'axios';

// Create an Axios instance
const apiClient = axios.create({
  baseURL: '/wp-json/my-plugin/v1', // WordPress REST API base
  headers: {
    'Content-Type': 'application/json',
    'Accept': 'application/json',
  },
  timeout: 5000,
});

export default {
  /**
   * GET request
   * @param {string} url
   * @param {object} params
   */
  get(url, params = {}) {
    return apiClient.get(url, { params })
      .then(res => res.data)
      .catch(err => { throw err; });
  },

  /**
   * POST request
   * @param {string} url
   * @param {object} data
   */
  post(url, data) {
    return apiClient.post(url, data)
      .then(res => res.data)
      .catch(err => { throw err; });
  },

  /**
   * PUT request
   * @param {string} url
   * @param {object} data
   */
  put(url, data) {
    return apiClient.put(url, data)
      .then(res => res.data)
      .catch(err => { throw err; });
  },

  /**
   * DELETE request
   * @param {string} url
   */
  delete(url) {
    return apiClient.delete(url)
      .then(res => res.data)
      .catch(err => { throw err; });
  }
};
