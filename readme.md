## Install
### Clone repository
```bash
$ git clone git@github.com:MammutAlex/ronnyShop.git
```
### Go to directory
```bash
$ cd ronnyShop
```
### Copy env
```bash
$ cp .env.example .env
```
### Start docker
```bash
$ ./develop start
```
### Install package
```bash
$ ./develop composer install
```
### Generate key
```bash
$ ./develop artisan key:generate
```
### Install database
```bash
$ ./develop artisan migrate:fresh --seed
```
### Add rights (optional)
```bash
# chmod -R o+rw bootstrap/ storage/
```
