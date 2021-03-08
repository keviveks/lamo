FROM node:alpine as builder

# install and cache app dependencies
COPY package.json package-lock.json ./
RUN npm install --only=prod&& mkdir /react-nginx && mv ./node_modules ./react-nginx

WORKDIR /react-nginx

COPY . ./

RUN npm install

RUN npm run build

# start app
CMD ["npm", "start"]