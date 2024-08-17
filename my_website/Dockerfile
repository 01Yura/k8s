# Используем официальный образ Nginx
FROM nginx:alpine

# Копируем наши файлы в директорию Nginx
COPY index.html /usr/share/nginx/html/
COPY hostname.php /usr/share/nginx/html/
COPY ip.php /usr/share/nginx/html/

# Указываем, что контейнер будет слушать на порту 80
EXPOSE 80

# Запуск Nginx
CMD ["nginx", "-g", "daemon off;"]