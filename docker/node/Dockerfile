FROM node:alpine

WORKDIR /var/www/html

COPY ./src/package*.json ./

RUN npm install

COPY ./src ./

# Выполняем команду от имени пользователя с UID пользователя WSL
USER node

CMD ["npm", "run", "watch"]
