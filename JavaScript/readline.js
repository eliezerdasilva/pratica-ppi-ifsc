const readline = require('readline')
const rl = readline.createInterface({
    input : process.stdin,
    output: process.stdout 
})
rl.on('line',(line)=>{
    console.log('line >>', line)
}) 
rl.on('SIGINT',()=>{
    console.log('bye')
    rl.pause()
})
rl.question('nome',(nome)=>{
    console.log('prazer', nome)

}
)