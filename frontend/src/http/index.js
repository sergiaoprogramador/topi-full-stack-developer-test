import axios from "axios";
import servicesRoutes from './services';

export const http = axios.create({
    baseURL: process.env.VUE_APP_API_URL,
});

let services = {};

Object.keys(servicesRoutes).map((route) => {
    services[route] = servicesRoutes[route];
});

export const meal = services.meal;

export default {
    http
};