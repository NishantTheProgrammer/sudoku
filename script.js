new Vue({
    el: '#sudoku',
    data: {
        arr: [
            [0, 0, 0,   0, 0, 0,   0, 0, 0],
            [0, 0, 0,   0, 0, 0,   0, 0, 0],
            [0, 0, 0,   0, 0, 0,   0, 0, 0],


            [0, 0, 0,   0, 0, 0,   0, 0, 0],
            [0, 0, 0,   0, 0, 0,   0, 0, 0],
            [0, 0, 0,   0, 0, 0,   0, 0, 0],


            [0, 0, 0,   0, 0, 0,   0, 0, 0],
            [0, 0, 0,   0, 0, 0,   0, 0, 0],
            [0, 0, 0,   0, 0, 0,   0, 0, 0]
        ]
    },
    methods: {
        populate(n)
        {
            for(let i = 0; i < 9; i++)
            {

                let cell = this.getBlock(i);
                while(this.isEmpty(cell[0], cell[1]) ||
                    this.vertically(cell[0], cell[1], n + 1) ||
                    this.horizontally(cell[0], cell[1], n + 1)
                )
                {
                    cell = this.getBlock(i);
                }
    



                this.arr[cell[0]][cell[1]] = n + 1;
            }
            
        },
        isEmpty(x, y)
        {
            if(this.arr[x][y] == 0)
            {
                return false;
            }
            else
            {
                return true;
            }
        }
        ,
        vertically(x, y, n)
        {
            let row = this.arr[x];
            if(row.includes(n))
            {
                console.log('row duplicate');
                return true;
            }
            return false;
        },
        horizontally(x, y, n)
        {
            let col = [];

            for(i = 0; i < 9; i++)
            {
                col.push(this.arr[i][y])
            }
            
            if(col.includes(n))
            {
                console.log('col duplicate');
                return true;
            }
            return false;
        },
        getBlock(n)
        {
            switch(n)
            {
                case 0:
                    return [randInt(0, 3), randInt(0, 3)]
                case 1:
                    return [randInt(0, 3), randInt(3, 6)]
                case 2:
                    return [randInt(0, 3), randInt(6, 9)]


                case 3:
                    return [randInt(3, 6), randInt(0, 3)]
                case 4:
                    return [randInt(3, 6), randInt(3, 6)]
                case 5:
                    return [randInt(3, 6), randInt(6, 9)]


                case 6:
                    return [randInt(6, 9), randInt(0, 3)]
                case 7:
                    return [randInt(6, 9), randInt(3, 6)]
                case 8:
                    return [randInt(6, 9), randInt(6, 9)]
            }
        }
    },
    beforeMount() {
        for(let i = 0; i < 1; i++)
        {
            this.populate(i);
        }
    }
});



function randInt(min, max) {
    return Math.floor(Math.random() * (max - min) ) + min;
}