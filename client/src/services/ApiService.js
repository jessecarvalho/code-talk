export default {
  async fetchData(url) {
    const response = await fetch("http://localhost:8000/api" + url);
    return await response.json();
  }
};