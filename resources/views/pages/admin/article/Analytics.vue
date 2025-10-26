<template>
    <div class="flex flex-col gap-4 mx-auto w-full px-6">
        <div class="w-full max-w-screen-lg">
            <canvas ref="chart" class="w-full" id="chart"></canvas>
        </div>
    </div>
</template>
<script>
import Chart from 'chart.js/auto';

export default {
    props: ["articles"],
    mounted() {
        var data = {
            labels: this.articles.data.map((article) => { return article.id + " (" + article.title + ")" }),
            datasets: [
                {
                    label: "Görüntüleme",
                    data: this.articles.data.map((article) => {
                        if (!article.meta) {
                            return 0;
                        }

                        return article.meta['view_count'] ?? 0
                    })
                },
            ]
        }

        var config = {
            type: 'bar',
            data: data,
            options: {
                scales: {
                    x: {
                        display: false,
                    }
                },
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: false,
                        text: 'İstatistikler'
                    }
                }
            },
        };

        new Chart(document.getElementById('chart'), config);
    },
};
</script>