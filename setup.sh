chmod +x ./init.sh
chmod +X ./src/terminal/criar_env.sh ./src/terminal/iniciar_serve.sh

cd ./src

npm i 

echo "iniciando container"
docker-compose up -d

cd ..

clear 

./init.sh