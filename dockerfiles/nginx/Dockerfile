FROM ubuntu:20.04

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    curl \
    libpcre3 \
    libpcre3-dev \
    libssl-dev \
    perl \
    make \
    zlib1g-dev \
    libpq-dev

# Download and build OpenResty
RUN curl -LO https://openresty.org/download/openresty-1.19.9.1.tar.gz && \
    tar -xzvf openresty-1.19.9.1.tar.gz && \
    cd openresty-1.19.9.1 && \
    ./configure --prefix=/opt/openresty \
        --with-pcre-jit \
        --with-ipv6 \
        --without-http_redis2_module \
        --with-http_iconv_module \
        --with-http_postgres_module \
        -j8 && \
    make && \
    make install

# Create a directory for Nginx configuration
RUN mkdir -p /etc/nginx

# Copy Nginx configuration files
COPY nginx.conf /etc/nginx/nginx.conf
COPY example.lua /etc/nginx/example.lua

# Expose port 80
EXPOSE 80

# Start Nginx
CMD ["/opt/openresty/nginx/sbin/nginx", "-g", "daemon off;"]

